<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use PhpParser\Builder\Use_;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::truncate();

        
        $unloanofficerRole = Role::where('name','unloanofficer')->first();
        $lbloanofficerRole = Role::where('name','lbloanofficer')->first();
        $adminRole = Role::where('name','admin')->first();


        $unloanofficer = User::create([
            'name'=>'unloanofficer',
            'email'=>'loanofficer@gmail.com',
            'password'=>bcrypt('userone'),
        ]);
       
        $lbloanofficer = User::create([
            'name'=>'unloanofficer',
            'email'=>'lbloanofficer@gmail.com',
            'password'=>bcrypt('usetwo'),
        ]);

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('userthree'),
        ]);

       
       $unloanofficer->roles()->attach($unloanofficerRole);
       $lbloanofficer->roles()->attach($lbloanofficerRole);
       $admin->roles()->attach($adminRole);
    }
}
