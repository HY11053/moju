<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ()
{
    Route::get('login-----//------', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login-----//------', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
    Route::get('dash', 'DashboardController@index');
    Route::get('index','IndexController@index');
    Route::post('upload/images','ImageUploadController@ImagesUpload');
    Route::post('upload/articleimages','ImageUploadController@upload_image');
    Route::post('file-delete-batch','ImageUploadController@DeletePics');
    Route::get('category','CategoryController@Index');
    Route::get('category/create/{id?}','CategoryController@Create');
    Route::get('category/edit/{id}','CategoryController@Edit');
    Route::post('category/create','CategoryController@PostCreate')->name('category_create');
    Route::put('category/edit/{id}','CategoryController@PostEdit')->name('category_edit');
    Route::post('category/delete/{id}','CategoryController@DeleteCategory');
    Route::get('article','ArticleController@Index');
    Route::get('article/ownership','ArticleController@OwnerShip');
    Route::get('article/pendingaudit','ArticleController@PendingAudit');
    Route::get('article/pedingpublished','ArticleController@PedingPublished');
    Route::get('article/brands','ArticleController@Brands');
    Route::get('article/previewarticle/{id}','ArticleController@PreViewArticle');
    Route::post('article/delete/{id}','ArticleController@DeleteArticle');
    Route::post('article/uploads','ArticleController@UploadImages');
    Route::get('article/create','ArticleController@Create');
    Route::get('article/brandcreate','ArticleController@BrandCreate');
    Route::get('article/supplydemand','ArticleController@SupplyDemandList');
    Route::get('article/supplycreate','ArticleController@SupplyCreate');
    Route::get('article/demandcreate','ArticleController@DemandCreate');
    Route::get('supply/edit/{id}','ArticleController@SupplyEdit');
    Route::get('article/edit/{id}','ArticleController@Edit');
    Route::get('article/type/{id}','ArticleController@Type');
    Route::post('article/create','ArticleController@PostCreate')->name('article_create');
    Route::post('article/search','ArticleController@PostArticleSearch')->name('article_search');

    Route::put('article/edit/{id}','ArticleController@PostEdit')->name('article_edit');
    Route::get('flink','FlinkController@Index');
    Route::get('flink/create','FlinkController@CreateFlink');
    Route::get('flink/edit/{id}','FlinkController@EditFlink');
    Route::get('flink/delete/{id}','FlinkController@DeleteFlink');
    Route::put('flink/edit/{id}','FlinkController@PostEditFlink');
    Route::post('flink/create','FlinkController@PostCreateFlink');
    Route::get('admin/list','AdminController@Index');
    Route::get('admin/regsiter','AdminController@Register');
    Route::post('admin/regsiter','AdminController@PostRegister');
    Route::get('admin/edit/{id}','AdminController@Edit');
    Route::get('admin/delete/{id}','AdminController@delete');
    Route::put('admin/edit/{id}','AdminController@PostEdit');
    Route::get('/user/group', 'AdminController@UserGroup')->name('usergroup');
    Route::get('user/groupcreate','AdminController@UserGroupCreate');
    Route::post('user/groupcreate','AdminController@PostUserGroupCreate');
    Route::get('/usergroup/edit/{id}', 'AdminController@UserGroupEdit');
    Route::post('/user/groupedit/{id}', 'AdminController@PostUserGroupEdit');
    Route::get('admin/userauth','AdminController@Userauth');
    Route::get('/clearnotification','AdminController@NotificationClear');
    Route::get('userlist','FrontUserController@Index');
    Route::get('useradd','FrontUserController@UserAdd');
    Route::get('user/edit/{id}','FrontUserController@UserEdit');
    Route::put('user/edit/{id}','FrontUserController@PostUserEdit');
    Route::get('user/delete/{id}','FrontUserController@UserDelete');
    Route::get('ask','AskController@Index')->name('adminasklists');
    Route::get('ask/add','AskController@Add');
    Route::post('ask/add','AskController@PostAdd')->name('ask_create');
    Route::get('ask/edit/{id}','AskController@AskEdit');
    Route::put('ask/edit/{id}','AskController@PostEdit')->name('ask_edit');
    Route::get('ask/delete/{id}','AskController@Delete');
    Route::get('ask/pending','AskController@PendingAsks');
    Route::get('answers','AnswerController@AnswerLists')->name('answerlists');
    Route::get('answer/edit/{id}','AnswerController@AnswerEdit');
    Route::put('answer/edit/{id}','AnswerController@PostEdit')->name('answer_edit');
    Route::get('answer/delete/{id}','AnswerController@AnswerDetete');
    Route::get('answers/pending','AnswerController@AnswerPending');
    Route::get('comments','CommentsController@Index')->name('commentlists');
    Route::get('comments/pendingaudit','CommentsController@Pending');
    Route::get('comment/edit/{id}','CommentsController@CommentEdit');
    Route::put('comment/edit/{id}','CommentsController@PostCommentEdit');
    Route::get('comment/delete/{id}','CommentsController@DeleteComment');
    Route::get('commentsreversion','CommentReversionController@Index')->name('reversionlists');
    Route::get('commentsreversion/pendingaudit','CommentReversionController@Pending');
    Route::get('reversion/edit/{id}','CommentReversionController@ReversionEdit');
    Route::put('reversion/edit/{id}','CommentReversionController@PostReversionEdit');
    Route::get('reversion/delete/{id}','CommentReversionController@ReversionDelete');
    Route::get('makesitemap','SiteMapController@Index');
    Route::get('makemsitemap','SiteMapController@MobileSitemap');
    Route::get('phone','PhoneManageController@Index');
    Route::post('phone/create','PhoneManageController@CreatePhoneManage');
    Route::get('phone/edit/{id}','PhoneManageController@PhoneManageEdit');
    Route::put('phone/edit/{id}','PhoneManageController@PhoneManageEditPost');
    Route::get('phone/delete/{id}','PhoneManageController@DeletePhone');
    Route::get('sysconfig','SysConfigController@Index');
    Route::get('sysinfo','SysConfigController@Info');
    Route::get('searchkey','SeoInfoController@SearchKey');
    Route::get('webinfo','SeoInfoController@Index');
    Route::get('brands','SeoInfoController@BrandsView');
    Route::get('worklinks','SeoInfoController@WorkLinks');
    Route::get('workcheck','SeoInfoController@WorkCheck');
    Route::get('mjlxadd','MoldTypeController@MoldtypeAdd');
    Route::post('mjlxadd','MoldTypeController@PostMoldtypeAdd');
    Route::get('mjlxlist','MoldTypeController@MoldtypeLists')->name('moldlist');
    Route::get('moldtypedel/{id}','MoldTypeController@MoldtypeDelete');
    Route::get('syfwadd','MoldTypeController@MoldareaAdd');
    Route::post('syfwadd','MoldTypeController@PostMoldareaAdd');
    Route::get('syfwlist','MoldTypeController@MoldareaLists')->name('moldarealist');
    Route::get('moldareadel/{id}','MoldTypeController@MoldareaDelete');
    Route::get('zydxadd','MoldTypeController@MoldobjectAdd');
    Route::post('zydxadd','MoldTypeController@PostMoldobjectAdd');
    Route::get('zydxlist','MoldTypeController@MoldobjectLists')->name('moldobjlist');
    Route::get('zydxdel/{id}','MoldTypeController@Moldobjectdel');

    Route::get('Atlas',function(){
        abort(403);
    });
    Route::get('/captcha/{config?}',function (\Mews\Captcha\Captcha $captcha,$config='default'){
        return $captcha->create($config);
    });

});

Route::get('phone',function(){
    return view('phone');
});
Route::post('/phone/complate','Mobile\PhoneController@Complates');
//移动端
Route::group(['domain' => 'm.moju.com'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('mojuchang/filter/{option}-{city?}','Mobile\ProjectFilterController@MoldGroupFilterList');
    Route::get('mojuchang/filter/{option}-{city?}/page/{page}/','Mobile\ProjectFilterController@MoldGroupFilterList');
    Route::get('{path}','Mobile\ListsViewController@ListsViewControl');
    Route::get('{path?}/page/{page}/','Mobile\ListsViewController@ListsViewControl')->name('pagelists');
    Route::get('{path?}/{id}.shtml','Mobile\BrandArticleController@BrandArticle');
});
//前台界面
Route::get('/','Frontend\IndexController@Index');
Route::get('paihangbang','Frontend\ListsViewController@Paihangbang');
Route::get('about','Frontend\StatementController@about');
Route::get('law','Frontend\StatementController@law');
Route::get('map','Frontend\StatementController@map');
Route::get('contact','Frontend\StatementController@contact');
Route::get('paihangbang/page/{page}/','Frontend\ListsViewController@Paihangbang')->name('paihangbanglists');
Route::get('zhanhui{option}/{city?}','Frontend\ListsViewController@ZhanhuiFilterList');
Route::get('zhanhui{option}/{city?}/page/{page}','Frontend\ListsViewController@ZhanhuiFilterList');
Route::get('mojuchang/filter/{option}-{city?}','Frontend\ProjectFilterController@MoldGroupFilterList');
Route::get('mojuchang/filter/{option}-{city?}/page/{page}/','Frontend\ProjectFilterController@MoldGroupFilterList');
Route::get('gongqiu/filter/{option}-{city?}','Frontend\ProjectFilterController@MoldsupplydemandFilterList');
Route::get('gongqiu/filter/{option}-{city?}/page/{page}/','Frontend\ProjectFilterController@MoldsupplydemandFilterList');
Route::get('{path}/mjsx/{syfw?}-{zydx?}-{city?}/','Frontend\ProjectFilterController@MojuFilter');
Route::get('{path}/mjsx/{syfw?}-{zydx?}-{city?}/page/{page}/','Frontend\ProjectFilterController@MojuFilter')->name('filterlists');
Route::get('{path}','Frontend\ListsViewController@ListsViewControl');
Route::get('{path?}/page/{page}/','Frontend\ListsViewController@ListsViewControl')->name('pagelists');
Route::get('{path?}/{id}.shtml','Frontend\BrandArticleController@BrandArticle');



