<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fb_id','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function roles()
    {
      return $this->belongsToMany(Role::class,'user_role','user_id','role_id');
    }


    public function hasAnyRole($roles)
    {
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      }else {
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }

      /**
       * method ini berfungsi untuk handle roles model pada model user
       * penggunaan di bagia postuserlist.blade.php
       * return berupa true/false karna menggunakan checkbox
       */
    public function hasRole($role)
    {
      if ($this->roles()->where('name',$role)->first()) {
        return true;
      }
      return false;
    }

    //
    // public function scopewhatRole($id)
    // {
    //
    // return $this->roles()->where('id', $id)->first();
    // }

}
