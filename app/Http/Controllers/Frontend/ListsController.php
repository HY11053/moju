<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Overwrite\Paginator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    public function jiaIndex(Request $request,$path,$page=0)
    {

        $path=getro;
        dd($path);
        $cid=$path;
        $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 12, $columns = ['*'], $pageName = 'page', $page);
        //转换自带分页器为自定义的分页器
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        return view('frontend.jiaindex',compact('pagelists'));
    }
}
