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
        //模具品牌企业顶部热门品牌
        $hotMjcompanys=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%h%')->take(5)->get();
        $picMjcompanys=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%p%')->take(3)->get();
        $mjCompany1s=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%p%')->take(8)->get();
        $mjCompany2s=Archive::where('typeid',1)->where('mid',1)->skip(8)->take(8)->get();
        $mjCompany3s=Archive::where('typeid',1)->where('mid',1)->skip(16)->take(8)->get();
        $mjCompany4s=Archive::where('typeid',1)->where('mid',1)->skip(24)->take(8)->get();
        $mjCompany5s=Archive::where('typeid',1)->where('mid',1)->skip(32)->take(8)->get();
        $mjCompany6s=Archive::where('typeid',1)->where('mid',1)->skip(40)->take(8)->get();
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        //产品专区
        $productions=Archive::where('typeid',1)->where('mid',1)->skip(16)->take(8)->get();
        return view('frontend.index',compact('flinks','tradeTypes','hotMjcompanys','picMjcompanys',
            'mjCompany1s','mjCompany2s','mjCompany3s','mjCompany4s','mjCompany5s','mjCompany6s'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
