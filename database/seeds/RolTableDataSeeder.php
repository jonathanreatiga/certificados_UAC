<?php

use Illuminate\Database\Seeder;

class RolTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 100; $i++) { 
	    	DB::table('roles')->insert([

                'rolnombre' => str_random(8),
                'rolcargo' => str_random(8)
	            //'email' => str_random(12).'@mail.com',
	            //'password' => bcrypt('123456')
	        ]);
    	}
    }
}
