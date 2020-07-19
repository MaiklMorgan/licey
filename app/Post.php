<?php

namespace App;

use Slug;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'lead',
        'text',
        'image'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($model){
            if($model->title){
                $model->slug = str_slug(Slug::make(strip_tags($model->title)));
            }
        });
    }
}
