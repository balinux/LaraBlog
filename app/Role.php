<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = ['role','description'];

    public function users()
    {
      return $this->belongToMany(User::class,'user_role','role_id','user_id');
    }
}
