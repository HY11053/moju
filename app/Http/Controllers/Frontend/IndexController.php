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
        //生产厂家
        $Mjcompanys=Archive::where('typeid',1)->where('mid',1)->take(9)->orderBy('click','desc')->get();
        $feileiMojus=Archive::whereIn('typeid',Arctype::where('topid',9)->pluck('id'))->where('mid','<>',1)->take(9)->orderBy('click','desc')->get();
        $hotNews=Archive::where('typeid',7)->where('mid','<>',1)->take(9)->orderBy('click','desc')->get();
        //行业频道
        $tradeTypes=Arctype::where('topid',9)->take(15)->get();
        //模具品牌企业顶部热门品牌
        $hotMjcompanys=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%h%')->take(5)->get();
        $picMjcompanys=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%p%')->take(3)->get();
        $mjCompany1s=Archive::where('typeid',1)->where('mid',1)->take(8)->get();
        $mjCompany2s=Archive::where('typeid',1)->where('mid',1)->skip(8)->take(7)->get();
        $mjCompany3s=Archive::where('typeid',1)->where('mid',1)->skip(15)->take(8)->get();
        $mjCompany4s=Archive::where('typeid',1)->where('mid',1)->skip(23)->take(7)->get();
        $mjCompany5s=Archive::where('typeid',1)->where('mid',1)->skip(30)->take(8)->get();
        $mjCompany6s=Archive::where('typeid',1)->where('mid',1)->skip(38)->take(7)->get();
        $newMjCompanys=Archive::where('typeid',1)->where('mid',1)->take(12)->where('flags','like','%s%')->get();
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->latest()->get();
        //产品专区
        $jiaProductions=Archive::where('typeid',3)->where('mid',1)->take(6)->latest()->get();
        $gangProductions=Archive::where('typeid',4)->where('mid',1)->take(6)->latest()->get();
        $productionNews=Archive::whereIn('typeid',[3,4])->where('mid','<>',1)->take(10)->latest()->get();
        //模具生产制造
        $hytjNews=Archive::where('typeid',7)->where('flags','like','%c%')->take(2)->latest()->get();
        $hyNews=Archive::where('typeid',7)->take(18)->latest()->get();
        $gongqiuNews=Archive::where('typeid',5)->take(10)->latest()->get();
        $areaNews=Archive::where('typeid','7')->where('country','<>','')->take(8)->where('litpic','<>','')->latest()->get();
        $zhanhuiNews=Archive::where('typeid','6')->take(9)->where('litpic','<>','')->latest()->get();
        return view('frontend.index',compact('flinks','tradeTypes','hotMjcompanys','picMjcompanys',
            'mjCompany1s','mjCompany2s','mjCompany3s','mjCompany4s','mjCompany5s','mjCompany6s',
            'jiaProductions','gangProductions','productionNews','hytjNews','hyNews','gongqiuNews',
            'areaNews','zhanhuiNews','newMjCompanys','Mjcompanys','feileiMojus','hotNews'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
