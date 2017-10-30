<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Moldarea;
use App\AdminModel\Moldobject;
use App\AdminModel\Moldtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoldTypeController extends Controller
{
    /**模具类型添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldtypeAdd()
    {
        return view('admin.moldtypeadd');
    }

    /**模具类型添加处理
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PostMoldtypeAdd(Request $request)
    {
         Moldtype::create($request->all());
         return redirect(route('moldlist'));
    }

    /**模具类型列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldtypeLists()
    {
        $moldlists=Moldtype::all();
        return view('admin.moldlist',compact('moldlists'));
    }

    /**模具类型删除
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function MoldtypeDelete(Request $request)
    {
        Moldtype::where('id',$request->id)->delete();
        return redirect(route('moldlist'));
    }

    /**
     * 模具适用范围添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldareaAdd()
    {
        return view('admin.moldareadd');
    }

    /**模具适用范围添加处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostMoldareaAdd(Request $request)
    {
        Moldarea::create($request->all());
        return redirect(route('moldarealist'));
    }

    /**模具适用范围列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldareaLists()
    {
        $moldlists=Moldarea::all();
        return view('admin.moldarealist',compact('moldlists'));
    }

    /**模具适用范围删除
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldareaDelete(Request $request)
    {
        Moldarea::where('id',$request->id)->delete();
        return redirect(route('moldarealist'));
    }

    /**
     * 模具作用对象添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldobjectAdd()
    {
        return view('admin.moldobjadd');
    }

    /**模具作用对象处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostMoldobjectAdd(Request $request)
    {
        Moldobject::create($request->all());
        return redirect(route('moldobjlist'));
    }

    /**模具作用对象列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function MoldobjectLists()
    {
        $moldlists=Moldobject::all();
        return view('admin.moldobjlist',compact('moldlists'));
    }

    /**模具作用对象删除
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function Moldobjectdel(Request $request)
    {
        Moldobject::where('id',$request->id)->delete();
        return redirect(route('moldobjlist'));
    }

}
