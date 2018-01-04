<?php

use Illuminate\Database\Seeder;

class EstadoTableDataSeeder extends Seeder
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
	    	DB::table('estados')->insert([
                'estadonombre' => str_random(8),
                'estadodescripcion' => str_random(8)
	            //'email' => str_random(12).'@mail.com',
	            //'password' => bcrypt('123456')
	        ]);
    	}
    }
}
