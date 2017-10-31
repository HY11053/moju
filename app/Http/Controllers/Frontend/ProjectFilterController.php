<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Moldarea;
use App\AdminModel\Moldobject;
use App\AdminModel\Moldtype;
use App\Overwrite\Paginator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectFilterController extends Controller
{
    /**
     * @param Request $request
     * 模具类型筛选
     */
    public function MojuFilter(Request $request,$path,$syfw=0,$zydx=0,$city=0,$page=0)
    {
        $syfw=$request->syfw?:0;
        $zydx=$request->zydx?:0;
        $city=$request->city?:0;
        $tradeTypes=Arctype::where('topid',9)->take(9)->get();
        $topbrands=Archive::where('typeid',1)->where('mid',1)->where('ismake','1')->where('flags','like','%h%')->orderBy('click','desc')->take(9)->get();
        $phBrands=Archive::where('mid',1)->where('ismake','1')->where('typeid',1)->orderBy('click','desc')->take(10)->get();
        $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
        if(Arctype::where('real_path',$path)->value('id')==9)
        {

            $typeids=Arctype::where('topid',9)->pluck('id');
            $pagelists=Archive::whereIn('typeid',$typeids)->where('mid','<>',1)
                ->when($syfw, function ($query) use ($syfw) {
                    return $query->where('syfw', 'like','%'.Moldarea::where('id',$syfw)->value('moldarea').'%');
                })
                ->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page);
        }else{

            $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)
                ->when($syfw, function ($query) use ($syfw) {
                    return $query->whereIn('id',Addonarticle::where('syfw', 'like','%'.Moldarea::where('id',$syfw)->value('moldarea').'%')->pluck('id'));
                })
                ->when($zydx, function ($query) use ($zydx) {
                    return $query->whereIn('id',Addonarticle::where('zydx', 'like','%'.Moldobject::where('id',$zydx)->value('moldobject').'%')->pluck('id'));
                })
                ->when($city, function ($query) use ($city) {
                    return $query->where('country',Area::where('id',$city)->value('city'));
                })
                ->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page);
        }
        $cid=$path.'/mjsx/'.$syfw.'-'.$zydx.'-'.$city;
        //转换自带分页器为自定义的分页器
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );

        $moldareas=Moldarea::all();
        $moldobjects=Moldobject::all();

        return view('frontend.mojufenlei',compact('pagelists','tradeTypes','topbrands','phBrands','newsbrands','moldareas','moldobjects','syfw','zydx','city','path'));
    }

    public function MoldGroupFilterList(Request $request,$option,$city,$page=0)
    {
        $city?:0;
        $cid=$option.$city;
        $tradeTypes=Moldtype::take(9)->get();
        $topbrands=Archive::where('typeid',1)->where('mid',1)->where('ismake','1')->where('flags','like','%h%')->orderBy('click','desc')->take(9)->get();
        $thisTypeinfos=Arctype::where('real_path',$option)->first();
        $phBrands=Archive::where('mid',1)->where('ismake','1')->where('typeid',1)->orderBy('click','desc')->take(10)->get();
        $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
        $pagelists=Archive::where('typeid',1)->where('mid',1)->where('ismake','1')
            ->when($option, function ($query) use ($option) {
                return $query->whereIn('id',Addonarticle::where('companyarea','like','%'.Moldtype::where('id',$option)->value('moldtype').'%')->pluck('id'));
            })
            ->when($city, function ($query) use ($city) {
                return $query->where('country',Area::where('id',$city)->value('city'));
            })
            ->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
        //转换自带分页器为自定义的分页器
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $brandtypes=Arctype::where('mid',1)->get();
        $thistypeinfo=Arctype::where('real_path',$option)->first();
        return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments','tradeTypes','phBrands','option','city'));

    }
}
