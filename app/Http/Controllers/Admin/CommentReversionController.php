<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\CommentReversion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentReversionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * 评论回复列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index ()
    {
        $commensreversions=CommentReversion::latest()->paginate(10);
        return view('admin.commentreversion',compact('commensreversions'));
    }

    /**待评论回复
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Pending ()
    {
        $commensreversions=CommentReversion::where('is_hidden',0)->latest()->paginate(10);
        return view('admin.commentreversion',compact('commensreversions'));
    }

    /**
     * 编辑回复评论
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ReversionEdit($id)
    {
        $thiscommentreversion=CommentReversion::findOrFail($id);
        return view('admin.commentreversion_edit',compact('thiscommentreversion'));
    }

    /**
     * 评论回复编辑处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function PostReversionEdit(Request $request,$id)
    {
        CommentReversion::find($id)->update($request->all());
        return redirect()->route('reversionlists');

    }

    /**
     * 删除评论回复
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ReversionDelete($id)
    {
        CommentReversion::findOrFail($id)->delete();
        return redirect()->route('reversionlists');

    }
}
