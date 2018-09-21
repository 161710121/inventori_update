<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role admin
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Sample User Admin
        $admin = new user;
        $admin->name = "Admin";
        $admin->username = "admin";
        $admin->password = bcrypt('123');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
