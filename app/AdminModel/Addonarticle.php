<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Addonarticle extends Model
{
    //,
    protected $fillable=['id','body','typeid','imagepics','redirect','coordinate','companyinfotitle','companyavtitle','companyareatitle','processtitle','productiontitle','teamtitle','credittitle','companyadvantage','companyareacontent','processcontent','productioncontent','teamcontent','creditcontent'];
    public function archive(){
        return $this->belongsTo('App\AdminModel\Archive', 'id');
    }
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
}

