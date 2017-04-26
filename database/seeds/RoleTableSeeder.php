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

        $role_user   = Role::where('name', 'User')->first();
        $role_admin  = Role::where('name', 'Admin')->first();
        $role_author = Role::where('name', 'Author')->first();

        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'rio@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $author = new User;
        $author->name = 'Author';
        $author->email = 'rio2@gmail.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);

        $user = new User;
        $user->name = 'User';
        $user->email = 'rio3@gmail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
