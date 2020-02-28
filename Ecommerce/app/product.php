<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class product extends Model
{
    protected $table="tblproducts";

    protected $fillable = [
        'id','name', 'dateupload', 'price','userID','screen','type','ram','storage','camara','battery','isPost','isDelete','sim','imgID'
    ];

    public function users(){
       return  $this->hasMany(User::class,'id');
    }
    public function images()
    {
        return $this->hasOne(Image::class,'imgID');
    }
}
