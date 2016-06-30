<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'established_at'];
    
//     public function getTitleAttribute($value)
//     {  //大文字にするやつ
//     	return mb_sutrtoupper($value);
//     }
    
//     public function setTitleAttribute($value)
//     {  //小文字にするやつ
//     	$this->attributes['title'] = mb_strtoupper($value);
//     }
}
