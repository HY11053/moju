<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * 回答列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AnswerLists()
    {
        $answerlists=Answer::paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }

    /**
     * 等待回答的问题
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AnswerPending()
    {
        $answerlists=Answer::where('is_hidden',0)->paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }

    /**
     * 编辑回答
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function AnswerEdit($id)
    {
        $thisanswerinfo=Answer::findOrFail($id);
        return view('admin.answeredit',compact('thisanswerinfo'));

    }

    /**
     * 编辑回答处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function PostEdit(Request $request,$id)
    {
        //dd($request->all());
        Answer::find($id)->update($request->all());
        return redirect()->route('answerlists');
    }

    /**
     * 删除回答
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function AnswerDetete($id)
    {
        Answer::find($id)->delete();
        return redirect()->route('answerlists');
    }
}
