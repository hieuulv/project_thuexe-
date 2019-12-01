<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Model\Post', 'cate_id');
    }
}
