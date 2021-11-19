<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mmebuat role admin
        $adminRole=new Role;
        $adminRole->name="admin";
        $adminRole->display_name="Admin RS.Sentosa";
        $adminRole->save();

        //membuat role member
        $memberRole=new Role;
        $memberRole->name="member";
        $memberRole->display_name="Member RS.Sentosa";
        $memberRole->save();

        //membuat sampel admin
        $admin=new User;
        $admin->name="Admin RS.Sentosa";
        $admin->email="admin@gmail.com";
        $admin->password= bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample member
         $member=new User;
         $member->name="Member RS.Sentosa";
         $member->email="member@gmail.com";
         $member->password= bcrypt("rahasia");
         $member->save();
         $member->attachRole($memberRole);
    }
}
