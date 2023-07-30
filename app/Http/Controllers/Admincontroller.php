<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Datatables;
use Illuminate\Support\Facades\Crypt;

class Admincontroller extends Controller
{
    public function getList()
    {
        $model = User::all();
    	return view('admin.author.list')->with('model',$model);
    }


    public function dataTable1()
    { 
    	$model = User::all();
    	return DataTables::eloquent($model)
                ->addColumn('post_count', function(User $author) {
                    return $author->posts->count().' bài viết';
                })
                ->addColumn('action', '
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#show-delete">
                    	<i class="fa fa-trash" aria-hidden="true"></i> Xoá
                    </button>')
                ->make(true);
    }

    public function delete(Request $request)
    {
    	if($request->ajax()){
    		$author = Admin::find($request->input('id'));
    		if($author->delete()){
    			return 'ok';
    		} else return 'Không thể xóa.';
    	} else return 'err';
    }
}
