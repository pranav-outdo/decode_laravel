<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceType;
use DataTables;
use Exception;
use Illuminate\Http\Request;

class ResourceTypeController extends Controller
{
    //
    public function index()
    {
        return view('admin.resource-type.index');
    }

    public function getTypes(Request $request)
    {
        if ($request->ajax()) {
            $data = ResourceType::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $deleteUrl = route('admin.resource-type.destroy', $row->id);
                    $showUrl = route('admin.resource-type.show', $row->id);
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm" data-toggle="modal" data-target="#typeEditModal" data-href="' . $showUrl . '"><i class="fa fa-edit" style="color: #fff;"></i></a>
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
            $type = ResourceType::withTrashed()->where('name', $request->name)->first();
            if ($request->ajax())
            {        
                if(!$type)
                {
                        $data = [
                            'name' => $request->name,
                        ];
                        $tag = ResourceType::create($data);
                        return response()
                        ->json(['status' => config('constants.validResponse.statusCode'), 'message' => 'Type Created!', 'data' => $tag])
                        ->withCallback($request->input('callback'));
                }
                return response()
                    ->json(['status' => config('constants.invalidResponse.statusCode'), 'message' => 'Type Already Exist!'])
                ->withCallback($request->input('callback'));
            }
            if ($type) {
                if ($type->deleted_at == null) {
                    return redirect()->back()->with('error', 'Type already exist.');
                } else {
                    $type->restore();
                }
            } else {
                $data = [
                    'name' => $request->name,
                ];
                ResourceType::create($data);
            }
            return redirect()->back()->with('success', 'Type stored successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(ResourceType $type)
    {
        try {
            return response()->json([
                'message' => 'Type retrieved successfully.',
                'success' => false,
                'data' => $type,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ]);
        }
    }

    public function update(ResourceType $type, Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|unique:resource_types,name,' . $type->id,
            ]);
            $type->update(['name' => $request->name]);
            return redirect()->back()->with('success', 'Type updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(ResourceType $type)
    {
        try {
            $type->forceDelete();
            return redirect()->back()->with('success', 'Type deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
