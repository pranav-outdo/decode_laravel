<?php 
namespace App\Utils;
use DataTables;
use DB;
use File;

Class VaultUtil
{
    public function getContentVaultList($request, $data)
    {
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function ($row) {
                $image = asset($row->logo);
                return '<img src="' . $image . '" alt="" style="border-radius:unset;">';
            })
            ->addColumn('is_active', function ($row) {
                if ($row->is_active == 1) {
                    return '<span class="badge badge-success">Active</span>';
                } else {
                    return '<span class="badge badge-danger">Inactive</span>';
                }
            })
            ->addColumn('image', function ($row) {
                $image =  image_public_path().$row->image;
                if (File::exists(store_image_path().$row->image)) 
                {
                    return  '<img src="'.$image.'" width="30px" height="30px">';
                }   
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('admin.content-vault.edit', $row->id);
                $deleteUrl = route('admin.content-vault.destroy', $row->id);
                $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-primary btn-sm"><i class="fa fa-edit" style="color: #fff;"></i></a>
                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-href="' . $deleteUrl . '" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" style="color: #fff;"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action', 'image', 'is_active'])
            ->make(true);
    }
}
