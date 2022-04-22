<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->insert([
            'name' => 'zahidul.con',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, provident odit in corrupti soluta cupiditate! Harum, quaerat.',
            'email' => 'zahidul@email.com',
        ]);

    }
}
