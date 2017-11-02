<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Addonarticle extends Model
{
    //,
    protected $fillable=[
        'id','body','typeid','imagepics','redirect','coordinate','companyinfotitle','companyarea',
        'companyavtitle','companyareatitle','processtitle','productiontitle','teamtitle','credittitle',
        'companyname','companyaddr','companydev','companyphone','companyemail','companydate','companyarea','companyopt','companypay','companylsno',
        'companyadvantage','companyareacontent','processcontent','productioncontent','teamcontent','creditcontent',
        'mjlx','syfw','zydx','zzgy','azfs','guige','zhanguan','zhtel','ticket','zhdz','starttime','endtime','xqnum','price','productname','mixnum','senddate'
    ];
    public function archive(){
        return $this->belongsTo('App\AdminModel\Archive', 'id');
    }
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
}

