<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'content', 'category_id','featured','slug','views'
    ];

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }

    protected $dates = ['deleted_at'];
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function hasTag($tagID){
        return in_array($tagID,$this->tags->pluck('id')->toArray());
    }
}
