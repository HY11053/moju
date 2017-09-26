<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Comment;
use App\Overwrite\Paginator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    //
    public function BrandLists(Request $request,$path,$page=0)
    {
        $cid=$path;
        $tradeTypes=Arctype::where('topid',9)->take(9)->get();
        $topbrands=Archive::where('mid',1)->where('ismake','1')->where('typeid',1)->where('flags','like','%h%')->orderBy('click','desc')->take(9)->get();
        $thisTypeinfos=Arctype::where('real_path',$path)->first();
        //判断当前栏目类型并返回给定视图及数据
        //品牌栏目视图
        if(Arctype::where('real_path',$path)->value('mid')==1)
        {
            $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            //转换自带分页器为自定义的分页器
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $phBrands=Archive::where('mid',1)->where('ismake','1')->where('typeid',1)->orderBy('click','desc')->take(10)->get();
            $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
            $brandtypes=Arctype::where('mid',1)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            $comments=Comment::where('is_hidden',0)->latest()->take(5)->get();

            return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments','tradeTypes','phBrands'));
        }else{

            if(Arctype::where('real_path',$path)->value('id')==null)
            {
                abort(404);
            }
            //模具钢||模具架视图数据
            if(Arctype::where('real_path',$path)->value('id')==3|| Arctype::where('real_path',$path)->value('id')==4)
            {
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 12, $columns = ['*'], $pageName = 'page', $page);
                //转换自带分页器为自定义的分页器
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                return view('frontend.jiaindex',compact('pagelists'));
            }
            elseif (Arctype::where('real_path',$path)->value('id')==6)
            {
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 12, $columns = ['*'], $pageName = 'page', $page);
                //转换自带分页器为自定义的分页器
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                return view('frontend.zhanhui',compact('pagelists'));
            }else{
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                $cNews=Archive::where('mid','<>',1)->where('ismake','1')->where('litpic','<>','')->where('flags','like','%c%')->first();
                $hNews=Archive::where('mid','<>',1)->where('ismake','1')->where('flags','like','%h%')->first();
                $sNews=Archive::where('mid','<>',1)->where('ismake','1')->where('flags','like','%s%')->take(8)->get();
                $topnews=Archive::where('mid','<>',1)->where('ismake','1')->where('litpic','<>','')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(5)->get();
                $thistypeinfo=Arctype::where('real_path',$path)->first();
                $fastfinds=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(20)->get();
                return view('frontend.lists',compact('pagelists','topnews','newsbrands','thistypeinfo','fastfinds','tradeTypes','topbrands','cNews','hNews','sNews','thisTypeinfos'));
            }
        }

    }

    /*
     * 排行榜
     */
    public function Paihangbang(Request $request, $page=0){
        $cid='paihangbang';
        $pagelists=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
        //转换自带分页器为自定义的分页器
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $topbrands=Archive::where('mid',1)->where('ismake','1')->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(9)->get();
        $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
        $brandtypes=Arctype::where('mid',1)->get();
        $thistypeinfo=Arctype::where('real_path','paihangbang')->first();
        $comments=Comment::where('is_hidden',0)->latest()->take(5)->get();
        return view('frontend.paihang',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments'));

    }
    /*
     * 品牌大全
     */
    public function Pinpai(Request $request, $page=0){
        $cid='pinpai';
        $pagelists=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
        //转换自带分页器为自定义的分页器
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $topbrands=Archive::where('mid',1)->where('ismake','1')->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(9)->get();
        $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
        $brandtypes=Arctype::where('mid',1)->get();
        $thistypeinfo=Arctype::where('real_path','pinpai')->first();
        $comments=Comment::where('is_hidden',0)->latest()->take(5)->get();
        return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments'));

    }
}
