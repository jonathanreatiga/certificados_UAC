<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Eloquent::unguard();
         
        $this->call('CursoTableDataSeeder');
        $this->call('PlantillaTableDataSeeder');
        $this->call('RolTableDataSeeder');
        $this->call('EstadoTableDataSeeder');
        //$this->call('UserTableDataSeeder');
    }
}
