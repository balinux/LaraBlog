<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
  protected $fillable = ['name','post_id','cat_id'];
    protected $table = 'post_cat';

    public function posts()
    {
      return $this->belongsToMany(Post::class);
    }
}
