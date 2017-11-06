<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index()
    {
        $allTypes=Arctype::where('topid',0)->take(8)->get();
        $newsLists=Archive::where('typeid',7)->take(2)->get();
        $Mjcompanys=Archive::where('typeid',1)->where('mid',1)->take(9)->orderBy('click','desc')->get();
        $mjCompany1s=Archive::where('typeid',1)->where('mid',1)->take(8)->get();
        $hotMjcompanys=Archive::where('typeid',1)->where('mid',1)->where('flags','like','%h%')->take(5)->get();
        $gongqiuNews=Archive::where('typeid',5)->take(10)->latest()->get();
        $jiaProductions=Archive::where('typeid',3)->where('mid','<>',1)->take(4)->latest()->get();
        $gangProductions=Archive::where('typeid',4)->where('mid','<>',1)->take(4)->latest()->get();
        $hyNews=Archive::where('typeid',7)->where('mid','<>',1)->take(10)->latest()->get();
        $zhanhuiNews=Archive::where('typeid','6')->take(9)->where('mid','<>',1)->where('litpic','<>','')->latest()->get();
        return view('mobile.index',compact('allTypes','newsLists','Mjcompanys','mjCompany1s','hotMjcompanys','gongqiuNews','hyNews','jiaProductions','gangProductions','zhanhuiNews'));
    }
}
