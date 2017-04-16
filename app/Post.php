<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = [
      'title',
      'slug',
      'excerpt',
      'body',
      'views',
      'image',
      'author_id'
    ];

    protected $table = 'posts';

    public function author()
    {
      return $this->belongsTo(User::class);
    }

    // public function categories()
    // {
    //   return $this->belongsToMany(Category::class);
    // }

    public function tags()
    {
      return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function cats()
    {
      return $this->belongsToMany(Cat::class)->withTimestamps();
    }

    public function getDateAttribute($value)
    {
      return $this->created_at->diffForHumans();
    }

    public function getModifAttribute($value)
    {
      return $this->updated_at->diffForHumans();
    }

    public function getTagkuAttribute($value)
    {
      $var = 'no tag';

      if (!is_null($this->tags)) {
        return $this->tags[0]->name;
      }else {
        return $var;
      }

      // if (is_null($this->tag)) {
      //   return $var;
      // }else if(!is_null($this->tag)) {
      //   return $this->tags[0]->name;
      // }

    }

}
