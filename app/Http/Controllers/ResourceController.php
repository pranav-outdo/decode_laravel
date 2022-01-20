<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContentVault;
use App\Utils\VaultUtil;
use App\Models\ResourceTopic;
use App\Models\ResourceType;
use App\Models\Resource;


class ResourceController extends Controller
{
    /* Resources Menu List */
    public function index()
    {   
        $resource = Resource::where('type', 'e-books')->where('is_active', 1)->first();

        $topics = ResourceTopic::select('name', 'id')->get();
        $types = ResourceType::select('name', 'id')->get();
        // $contentVaults = ContentVault::get();
        
        $contentVaults = ContentVault::paginate(
            $perPage = '', $columns = ['*'], $pageName = 'content_vault'
        );

        $data = [
            'topics' => $topics,
            'types' => $types,
            'contentVaults' => $contentVaults,
            'resource' => $resource
        ];
        return view('front.resources.index')->with($data);
    }

    /* content vault list show */
    public function contentVaultData(Request $request)
    {
        $request;
        $topics = ResourceTopic::select('name', 'id')->get();
        $types = ResourceType::select('name', 'id')->get();
        $contentVaults = ContentVault::orderBy('created_at','desc');
        if($request->search)
        {
            $contentVaults->where('title', 'like', "%{$request->search}%");
        }
        if($request->type_id)
        {
            $contentVaults->whereJsonContains('type_ids', [$request->type_id]);
        }

        if($request->topic_id)
        { 
            $contentVaults->whereJsonContains('topic_ids',[$request->topic_id]);
        }
        
        $dcontent = $contentVaults;
        $list = 1;
        if(count($dcontent->get()) == 0)
        {
            $list = 0;
            return response()->json(['success' => false, 'html' => [], 'list' => 0  ]);
        }

        $contentVaults = $contentVaults->paginate(
            $perPage = '', $columns = ['*'], $pageName = 'content_vault'
        );
        $data = [
            'topics' => $topics,
            'types' => $types,
            'contentVaults' => $contentVaults
        ];

        $html = view('front.resources.content_vault')->with($data)->render();
        return response()->json(['success' => true, 'html' => $html, 'list' => 1]);
    }
}