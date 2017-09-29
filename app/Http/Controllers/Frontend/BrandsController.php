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
        $topbrands=Archive::where('typeid',1)->where('mid',1)->where('ismake','1')->where('flags','like','%h%')->orderBy('click','desc')->take(9)->get();
        $thisTypeinfos=Arctype::where('real_path',$path)->first();
        $phBrands=Archive::where('mid',1)->where('ismake','1')->where('typeid',1)->orderBy('click','desc')->take(10)->get();
        $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
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
            $brandtypes=Arctype::where('mid',1)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments','tradeTypes','phBrands'));
        }else{

            if(Arctype::where('real_path',$path)->value('id')==null)
            {
                abort(404);
            }
            //模具钢||模具架视图数据
            if(Arctype::where('real_path',$path)->value('id')==3|| Arctype::where('real_path',$path)->value('topid')==3|| Arctype::where('real_path',$path)->value('id')==4 ||Arctype::where('real_path',$path)->value('topid')==4)
            {
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 12, $columns = ['*'], $pageName = 'page', $page);
                //转换自带分页器为自定义的分页器
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                if(Arctype::where('real_path',$path)->value('topid')==0)
                {
                    $sonTypeinfos=Arctype::where('topid',Arctype::where('real_path',$path)->value('id'))->get();
                }else{
                    $sonTypeinfos=Arctype::where('topid',Arctype::where('real_path',$path)->value('topid'))->get();
                }
                return view('frontend.jiaindex',compact('pagelists','topbrands','sonTypeinfos'));
            }
            //展会信息列表数据
            elseif (Arctype::where('real_path',$path)->value('id')==6)
            {
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 12, $columns = ['*'], $pageName = 'page', $page);
                //转换自带分页器为自定义的分页器
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                return view('frontend.zhanhui',compact('pagelists'));
            }
            //模具分类
            elseif (Arctype::where('real_path',$path)->value('id')==9 || Arctype::where('real_path',$path)->value('topid')==9)
            {
                if(Arctype::where('real_path',$path)->value('id')==9)
                {
                    $typeids=Arctype::where('topid',9)->pluck('id');
                    $pagelists=Archive::whereIn('typeid',$typeids)->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page);
                }else{
                    $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page);
                }
                //转换自带分页器为自定义的分页器
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                return view('frontend.mojufenlei',compact('pagelists','tradeTypes','topbrands','phBrands','newsbrands'));
            }else{
                $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
                $pagelists= Paginator::transfer(
                    $cid,//传入分类id,
                    $pagelists//传入原始分页器
                );
                $cNews=Archive::where('mid','<>',1)->where('ismake','1')->where('litpic','<>','')->where('flags','like','%c%')->first();
                $hNews=Archive::where('mid','<>',1)->where('ismake','1')->where('flags','like','%h%')->first();
                $sNews=Archive::where('mid','<>',1)->where('ismake','1')->where('flags','like','%s%')->take(8)->get();
                $topnews=Archive::where('mid','<>',1)->where('ismake','1')->where('litpic','<>','')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $thistypeinfo=Arctype::where('real_path',$path)->first();
                $zhanhuiNews=Archive::where('typeid',6)->take(8)->latest()->get();
                $fastfinds=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(20)->get();
                return view('frontend.lists',compact('pagelists','topnews','newsbrands','thistypeinfo','fastfinds','tradeTypes','topbrands','cNews','hNews','sNews','thisTypeinfos','zhanhuiNews'));
            }
        }

    }

    /*
     * 排行榜
     */
    public function Paihangbang(Request $request, $page=0){
        $cid='paihangbang';
        $tradeTypes=Arctype::where('topid',9)->take(9)->get();
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
        return view('frontend.paihang',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments','tradeTypes'));

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
