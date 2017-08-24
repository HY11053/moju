<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\AdminModel\flink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //零食头部推荐品牌文档
        $lingshibrands=Archive::where('mid','1')->whereIn('id',[5,38,91, 51,35,115,53,85,72,80])->where('published_at','<=',Carbon::now())->take(10)->orderBy('id','asc')->get();
        $chaohuobrands=Archive::where('mid','1')->whereIn('id',[8,9,17, 18,28,29,34,49,55,126])->where('published_at','<=',Carbon::now())->take(10)->orderBy('id','asc')->get();
        $ganguobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',4)->where('published_at','<=',Carbon::now())->take(10)->latest()->get();
        $jinkoubrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',5)->where('published_at','<=',Carbon::now())->take(10)->latest()->get();

        $zhbrands=Archive::latest()->whereIn('typeid',[8])->where('published_at','<=',Carbon::now())->orderBy('published_at','desc')->take(8)->get();
        //友情链接
        //行业频道
        $tradeTypes=Arctype::where('topid',9)->get();
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('flinks','tradeTypes'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
