<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentVault;
use App\Utils\VaultUtil;
use App\Models\ResourceTopic;
use App\Models\ResourceType;
use DataTables;
use DB;
use File;

class ContentVaultController extends Controller
{
    protected $vaultUtil;
    public function __construct(VaultUtil $vaultUtil)
    {
        $this->vaultUtil = $vaultUtil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = ContentVault::latest()->select('*')->get();
        // return $this->vaultUtil->getContentVaultList($request, $data);

        $topics = ResourceTopic::select('name', 'id')->get();
        $types = ResourceType::select('name', 'id')->get();
        $data = [
            'topics' => $topics,
            'types' => $types
        ];
        return view('admin.content-vault.index')->with($data);
    }

    public function getContentVaultList(Request $request)
    {
        $data = ContentVault::latest()->select('*');
        return $this->vaultUtil->getContentVaultList($request, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = ResourceTopic::select('name', 'id')->get();
        $types = ResourceType::select('name', 'id')->get();
        $data = [
            'topics' => $topics,
            'types' => $types,
            'selected' => '',
            'page' => 'create'
        ];
        return view('admin.content-vault.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return self::createAndUpdateVault($request);
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
    public function edit(ContentVault $contentVault)
    {
        $topics = ResourceTopic::select('name', 'id')->get();
        $types = ResourceType::select('name', 'id')->get();
        $data = [
            'topics' => $topics,
            'types' => $types,
            'contentVault' => $contentVault,
            'selected' => '',
            'page' => 'edit'
        ];
        return view('admin.content-vault.edit')->with($data);
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
        return self::createAndUpdateVault($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentVault $vault)
    {
        try {
            $vault->forceDelete();
            return redirect()->back()->with('success', 'Vault deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function createAndUpdateVault($request, $id = NULL)
    {  
        DB::beginTransaction();
        try
        {   
            if($vault = ContentVault::find($id))
            {
                $file = $vault->image;
                $old_image = image_public_path().$vault->image;
            }else{
                $file = null;
                $old_image = null;
            }

            if ($request->hasFile('image')) {
                $file = uploadFile($request->file('image'), 'vaults');
                if($old_image && $vault->image)
                {
                    removeFile($vault->image, 'vaults');
                }
            }

            $contentVault= ContentVault::updateOrCreate(
                ['id' => $id],[
                'title' => $request->title,
                'link' => $request->link,
                'image' => $file,
                'type_ids' => $request->type_ids,
                'topic_ids' => $request->topic_ids
            ]);

            DB::commit();
            if ($contentVault) {
                return redirect()->route('admin.content-vault.index')->with('success', 'Vault details save done!');
            } else {
                return redirect()->back()->with('error', 'Failed to Vault details save! Try again.');
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
