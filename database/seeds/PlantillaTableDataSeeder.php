<?php

use Illuminate\Database\Seeder;

class PlantillaTableDataSeeder extends Seeder
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
	    	DB::table('plantillas')->insert([

                'plantillanombre' => 'Plantilla'.(int)str_random(30),
                'plantillahtml' => str_random(8),
                'plantillacss' => str_random(8),
                'plantilladescripcion' => str_random(8),
                'plantillaorientacion' => str_random(8),
                'plantillaformato' => str_random(8)
	            //'email' => str_random(12).'@mail.com',
	            //'password' => bcrypt('123456')
	        ]);
    	}
    }
}
