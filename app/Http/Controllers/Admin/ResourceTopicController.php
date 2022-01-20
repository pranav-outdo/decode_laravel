<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceTopic;
use DataTables;
use Exception;
use Illuminate\Http\Request;

class ResourceTopicController extends Controller
{
    //
    public function index()
    {
        return view('admin.resource-topic.index');
    }

    public function getTopics(Request $request)
    {
        if ($request->ajax()) {
            $data = ResourceTopic::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $deleteUrl = route('admin.resource-topic.destroy', $row->id);
                    $showUrl = route('admin.resource-topic.show', $row->id);
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm" data-toggle="modal" data-target="#topicEditModal" data-href="' . $showUrl . '"><i class="fa fa-edit" style="color: #fff;"></i></a>
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
            $topic = ResourceTopic::withTrashed()->where('name', $request->name)->first();
            if ($request->ajax())
            {        
                if(!$topic)
                {
                        $data = [
                            'name' => $request->name,
                        ];
                        $tag = ResourceTopic::create($data);
                        return response()
                        ->json(['status' => config('constants.validResponse.statusCode'), 'message' => 'Topic Created!', 'data' => $tag])
                        ->withCallback($request->input('callback'));
                }
                return response()
                    ->json(['status' => config('constants.invalidResponse.statusCode'), 'message' => 'Topic Already Exist!'])
                ->withCallback($request->input('callback'));
            }
            if ($topic) {
                if ($topic->deleted_at == null) {
                    return redirect()->back()->with('error', 'Topic already exist.');
                } else {
                    $topic->restore();
                }
            } else {
                $data = [
                    'name' => $request->name,
                ];
                ResourceTopic::create($data);
            }
            return redirect()->back()->with('success', 'Topic stored successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(ResourceTopic $topic)
    {
        try {
            return response()->json([
                'message' => 'Topic retrieved successfully.',
                'success' => false,
                'data' => $topic,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ]);
        }
    }

    public function update(ResourceTopic $topic, Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|unique:resource_topics,name,' . $topic->id,
            ]);
            $topic->update(['name' => $request->name]);
            return redirect()->back()->with('success', 'Topic updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(ResourceTopic $topic)
    {
        try {
            $topic->forceDelete();
            return redirect()->back()->with('success', 'Topic deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
