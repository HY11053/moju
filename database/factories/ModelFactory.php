<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'ip' => $faker->ipv4,
        'mobilephone'=>$faker->unique()->phoneNumber,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\AdminModel\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => 'liang569874@163.com',
        'portrait'=>'/AdminLTE/dist/img/user4-128x128.jpg',
        'dutytype'=>'0',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
//栏目测试数据
$factory->define(App\AdminModel\Arctype::class, function (Faker\Generator $faker) {

    return [
        'typename' => $faker->company,
        'reid'=>rand(0,5),
        'topid'=>rand(0,1),
        'sortrank'=>rand(1,10),
        'typename'=>$faker->company,
        'typedir'=>$faker->word,
        'title'=>$faker->title,
        'keywords'=>$faker->word,
        'description'=>$faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'is_write'=>rand(0,1),
        'real_path'=>$faker->word,
        'litpic'=>$faker->imageUrl(640,480),
        'typeimages'=>$faker->imageUrl(640,480),
        'contents'=>$faker->text,
    ];
});

//文档测试数据
$factory->define(App\AdminModel\Archive::class, function (Faker\Generator $faker) {

    return [
        'typeid' => rand(1,25),
        'ismake'=>rand(0,1),
        'click'=>rand(1000,5000),
        'title'=>$faker->company,
        'shorttitle'=>$faker->title,
        'tags'=>$faker->companySuffix,
        'country'=>$faker->city,
        'published_at'=>Carbon\Carbon::now(),
        'mid'=>rand(0,1),
        'keywords'=>$faker->word,
        'description'=>$faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'write'=>'梁李良',
        'litpic'=>$faker->imageUrl(640,480),
        'dutyadmin'=>rand(1,5),
        'flags'=>$faker->randomElement($array = array ('h','p','c','f','s','a')),
    ];
});

//文档测试数据
$factory->define(App\AdminModel\Addonarticle::class, function (Faker\Generator $faker) {

    return [
        'typeid' => rand(0,25),
        'body'=>$faker->text,
        'companyname'=>$faker->company,
        'companyaddr'=>$faker->address,
        'companydev'=>$faker->jobTitle,
        'companyphone'=>$faker->phoneNumber,
        'companyemail'=>$faker->companyEmail,
        'companydate'=>$faker->date(),
        'companyarea'=>$faker->address(),
        'companyopt'=>'经营范围测试数据',
        'companypay'=>'注册资金测试数据',
        'companypay'=>'注册资金测试数据',
        'companylsno'=>'经营许可试数据',
        'companyinfotitle'=>'企业简介标题',
        'companyavtitle'=>'公司优势测试数据',
        'companyareatitle'=>'经营范围标题试数据',
        'processtitle'=>'加工流程标题试数据',
        'productiontitle'=>'产品展示标题测试数据',
        'teamtitle'=>'团队展示标题测试数据',
        'credittitle'=>'企业信用标题测试数据',
        'mjlx'=>'模具类型',
        'syfw'=>'适用范围',
        'zydx'=>'作用对象',
        'zzgy'=>'制造工艺',
        'azfs'=>'安装方式',
        'guige'=>'规格尺寸',
        'zhanguan'=>'展会展馆',
        'ticket'=>'门票免费',
        'zhdz'=>'展会地址',
        'starttime'=>\Carbon\Carbon::now(),
        'endtime'=>\Carbon\Carbon::tomorrow(),
        'imagepics'=>$faker->imageUrl(640,480),
        'companyadvantage'=>$faker->text(1000),
        'companyareacontent'=>$faker->text(1000),
        'processcontent'=>$faker->text(1000),
        'productioncontent'=>$faker->text(1000),
        'teamcontent'=>$faker->text(1000),
        'creditcontent'=>$faker->text(1000),
    ];
});

//友情链接
$factory->define(App\AdminModel\flink::class, function (Faker\Generator $faker) {

    return [
        'weburl' =>$faker->domainName,
        'webname' => $faker->text(50),
        'note' =>$faker->name,
        'address' => $faker->address,

    ];
});

//电话
$factory->define(App\AdminModel\Phonemanage::class, function (Faker\Generator $faker) {

    return [
        'name' =>$faker->name,
        'phoneno' => $faker->phoneNumber,
        'note' =>$faker->text(50),
        'address' => $faker->address,
        'ip' => $faker->ipv4,
        'gender' => '男',
    ];
});