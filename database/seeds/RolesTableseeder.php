<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::truncate();

        role::create(['name'=>'unloanofficer']);
        role::create(['name'=>'bdloanofficer']);
        role::create(['name'=>'admin']);
    }
}
