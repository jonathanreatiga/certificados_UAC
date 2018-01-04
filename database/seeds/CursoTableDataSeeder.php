<?php

use Illuminate\Database\Seeder;

class CursoTableDataSeeder extends Seeder
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
	    	DB::table('cursos')->insert([

                'cursonombre' => str_random(8),
                'cursodescripcion' => str_random(8),
                'cursonumerohoras' => (int)str_random(15)
	            //'email' => str_random(12).'@mail.com',
	            //'password' => bcrypt('123456')
	        ]);
    	}
    }
}
