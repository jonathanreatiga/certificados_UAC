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
        for ($i=0; $i < 30; $i++) { 
	    	DB::table('cursos')->insert([

                'cursonombre' => 'Curso'.(int)str_random(30),
                'cursodescripcion' => str_random(8),
                'cursonumerohoras' => (int)str_random(8)
	            //'email' => str_random(12).'@mail.com',
	            //'password' => bcrypt('123456')
	        ]);
    	}
    }
}
