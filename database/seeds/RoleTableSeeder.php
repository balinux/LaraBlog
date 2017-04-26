<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $admin = new Role;
      $admin->name = 'Admin';
      $admin->description = 'Admin role';
      $admin->save();

      $author = new Role;
      $author->name = 'Author';
      $author->description = 'Author role';
      $author->save();

      $user = new Role;
      $user->name = 'User';
      $user->description = 'User role';
      $user->save();

    }
}
