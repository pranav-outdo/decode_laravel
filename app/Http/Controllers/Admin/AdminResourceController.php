<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;
use DB;

class AdminResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resource = Resource::where('type','e-books')->first();
        if(!$resource)
        {
            return $this->create();
        }else{
            return $this->edit($resource ->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'page' => 'create'
        ];
        return view('admin.resources.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return self::createAndUpdateResources($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $resource = Resource::where('type','e-books')->first();
        if(!$resource)
        {
            return $this->create();
        }else{
            $data = [
                'resource' => $resource,
                'page' => 'edit'
            ];
            return view('admin.resources.edit')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       return self::createAndUpdateResources($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        try {
            $resource->forceDelete();
            return redirect()->back()->with('success', 'E-Books details deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createAndUpdateResources($request, $id = NULL)
    {
        DB::beginTransaction();
        try
        {   
            if($resource = Resource::find($id))
            {
                $file = $resource->image;
                $old_image = resources_public_path().$resource->image;
                $this->validate($request, [
                    'title' => 'required',
                    'link' => 'required',
                    'description' => 'required'
                ]);
            }else{
                $this->validate($request, [
                    'title' => 'required',
                    'link' => 'required',
                    'description' => 'required',
                    'image' => 'required'
                ]);

                $file = null;
                $old_image = null;
            }

            if ($request->hasFile('image')) {
                $file = uploadFile($request->file('image'), 'resources');
                if($old_image && $resource->image)
                {
                    removeFile($resource->image, 'resources');
                }
            }

            $resourceUpdate= Resource::updateOrCreate(
                ['id' => $id],[
                'type' => config('constants.resources.e-books'),
                'title' => $request->title,
                'link' => $request->link,
                'description' => $request->description,
                'image' => $file,
                'is_active' => $request->is_active
            ]);

            DB::commit();
            if ($resourceUpdate) {
                return redirect()->route('admin.resource-books.index')->with('success', 'E-books details save done!');
            } else {
                return redirect()->back()->with('error', 'Failed to E-books details save! Try again.');
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
