<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use DataTables;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function getCategories(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $deleteUrl = route('admin.category.destroy', $row->id);
                    $showUrl = route('admin.category.show', $row->id);
                    $actionBtn = '<a href="javascript:void(0)" onclick="addEditcategoryClick()" class="edit btn btn-primary btn-sm" data-toggle="modal" data-target="#categoryEditModal" data-href="' . $showUrl . '"><i class="fa fa-edit" style="color: #fff;"></i></a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-href="' . $deleteUrl . '" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" style="color: #fff;"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
            ]);
            $category = Category::withTrashed()->where('name', $request->name)->first();
            if ($request->ajax())
            {        
                if(!$category)
                {
                        $data = [
                            'name' => $request->name,
                        ];
                        $tag = Category::create($data);
                        return response()
                        ->json(['status' => config('constants.validResponse.statusCode'), 'message' => 'Category Created!', 'data' => $tag])
                        ->withCallback($request->input('callback'));
                }
                return response()
                    ->json(['status' => config('constants.invalidResponse.statusCode'), 'message' => 'Category Already Exist!'])
                ->withCallback($request->input('callback'));
            }
            if ($category) {
                if ($category->deleted_at == null) {
                    return redirect()->back()->with('error', 'Category name already exist.');
                } else {
                    $category->restore();
                }
            } else {
                $data = [
                    'name' => $request->name,
                ];
                Category::create($data);
            }
            
            return redirect()->back()->with('success', 'Category stored successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Category $category)
    {
        try {
            $category->forceDelete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(Category $category)
    {
        try {
            return response()->json([
                'message' => 'Category retrieved successfully.',
                'success' => false,
                'data' => $category,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ]);
        }
    }

    public function update(Category $category, Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->ajax())
            {       
                $validator = Validator::make($request->all(), [
                    'name' => 'required|unique:categories,name,' . $category->id
                ]);
        
                if ($validator->fails()) {
                    return response()
                        ->json(['status' => config('constants.invalidResponse.statusCode'), 'message' => 'Category Already Exist!'])
                        ->withCallback($request->input('callback'));
                }
                $category->update(['name' => $request->name]);
                DB::commit();
                return response()
                ->json(['status' => config('constants.validResponse.statusCode'), 'message' => 'Category Updated!', 'data' => $category]);
            }
            $this->validate($request, [
                'name' => 'required|unique:categories,name,' . $category->id,
            ]);
            $category->update(['name' => $request->name]);
            return redirect()->back()->with('success', 'Category updated successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
