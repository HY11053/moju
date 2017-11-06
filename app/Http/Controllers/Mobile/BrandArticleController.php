<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BrandArticleController extends Controller
{
    /**
     * 文章视图展示
     * @param Request $request
     * @param $path
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticle(Request $request,$path,$id)
    {
        preg_match('/[a-zA-Z]+/',$request->path(),$matchs);
        if (Archive::findOrFail($id)->arctype->real_path!=$matchs[0])
        {
            abort(404);
        }else{
            if(Archive::findOrFail($id)->mid ==1)
            {
                $thisarticleinfos=Archive::findOrFail($id);
                $topbrands=Archive::where('mid',1)->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $latestbrands=Archive::where('mid',1)->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->latest()->take(20)->get();
                $latesnews=Archive::where('ismake',1)->where('mid','<>',1)->whereIn('typeid',[1,3,4,5,9])->where('published_at','<=',Carbon::now())->latest()->take(10)->get();
                $xgsearchs=Archive::where('ismake','1')->where('shorttitle','like','%'.$thisarticleinfos->article->brandname.'%')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $published=$thisarticleinfos['attributes']['published_at'];
                DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
                return view('mobile.brand_article',compact('thisarticleinfos','topbrands','latestbrands','comments','latesnews','xgsearchs'));
            }else{
                $thisarticleinfos=Archive::findOrFail($id);
                $topbrands=Archive::where('mid',1)->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $brandnews=Archive::where('mid','<>',1)->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $xgnews=Archive::where('title','like','%'.$thisarticleinfos->shorttitle.'%')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $prev_article = Archive::latest('published_at')->published()->find($this->getPrevArticleId($thisarticleinfos->id));
                $next_article = Archive::latest('published_at')->published()->find($this->getNextArticleId($thisarticleinfos->id));
                $published=$thisarticleinfos['attributes']['published_at'];
                DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
                switch ($thisarticleinfos->arctype->id)
                {
                    case 5:
                        $view='mobile.gongqiu_article';
                        break;
                    case 6:
                        $view='mobile.zhanhui_article';
                        break;
                    case 9:
                        $view='mobile.fenlei_article';
                        break;
                    default:
                        if($thisarticleinfos->arctype->topid==9)
                        {
                            $view='mobile.fenlei_article';
                        }else{
                            $view='mobile.article_article';
                        }
                }

                return view($view,compact('thisarticleinfos','prev_article','next_article','topbrands','comments','brandnews','xgnews'));
            }

        }
    }

    /**
     * 获取上一页
     * @param $id
     * @return mixed
     */
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }

    /**
     * 获取下一页
     * @param $id
     * @return mixed
     */
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }
}
