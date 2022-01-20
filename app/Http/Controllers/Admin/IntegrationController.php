<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Integration;
use DataTables;
use Exception;
use Illuminate\Http\Request;
use DB;
use File;

class IntegrationController extends Controller
{
    public function index()
    {
        return view('admin.integration.index');
    }

    public function getIntegrations(Request $request)
    {
        if ($request->ajax()) {
            $data = Integration::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('logo_image', function ($row) {
                    $image =  logo_image_public_path().$row->logo;
                    if (File::exists(store_logo_image_path().$row->logo)) 
                    {
                        return  '<img src="'.$image.'" width="30px" height="30px">';
                    }   
                })
                ->addColumn('featured', function ($row) {
                    if ($row->is_feature) {
                        return '<span class="badge badge-success">Featured</span>';
                    } else {
                        return '<span class="badge badge-danger">Not Featured</span>';
                    }
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.integration.edit', $row->id);
                    $deleteUrl = route('admin.integration.destroy', $row->id);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-primary btn-sm"><i class="fa fa-edit" style="color: #fff;"></i></a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-href="' . $deleteUrl . '" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" style="color: #fff;"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'logo_image', 'featured'])
                ->make(true);
        }
    }

    public function create()
    {
        $data = [
            'categories' => Category::where('is_active', 1)->select('name', 'id')->get(),
            'page' => 'create',
            'integrationCount' => Integration::where('is_feature', 1)->count()
        ];
        return view('admin.integration.create')->with($data);
    }

    public function store(Request $request)
    {
        return self::createAndUpdateIntegration($request);
    }

    public function destroy(Integration $integration)
    {
        try {
            $integration->forceDelete();
            return redirect()->back()->with('success', 'Integration deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Integration $integration)
    {
        $data = [
            'categories' => Category::where('is_active', 1)->select('name', 'id')->get(),
            'page' => 'edit',
            'integration' => $integration,
            'integrationCount' => Integration::where('is_feature', 1)->count()
        ];
        return view('admin.integration.edit')->with($data);
    }

    public function update(Integration $integration, Request $request)
    {
        return self::createAndUpdateIntegration($request, $integration->id);
    }

    // integration create and update  unique function
    public function createAndUpdateIntegration($request, $id = NULL)
    {  
        DB::beginTransaction();
        try
        {   
            if($integration = Integration::find($id))
            {
                $file = $integration->image;
                $old_image = image_public_path().$integration->image;
                
            }else{
                $file = null;
                $old_image = null;
            }

            if ($request->hasFile('logo')) {
                $file = uploadFile($request->file('logo'), 'integration');
                if($old_image && $integration->image)
                {
                    removeFile($integration->image, 'integration');
                }
            }

            $IntegrationSave= Integration::updateOrCreate(
                ['id' => $id],[
                'name' => $request->name,
                'description' => $request->description,
                'category_ids' => $request->category_ids,
                'logo' => $file,
                'is_feature' => $request->is_featured == 'on' ? true : false
            ]);

            DB::commit();
            if ($IntegrationSave) {
                return redirect()->route('admin.integration.index')->with('success', 'Integration details save done!');
            } else {
                return redirect()->back()->with('error', 'Failed to Integration details save! Try again.');
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
