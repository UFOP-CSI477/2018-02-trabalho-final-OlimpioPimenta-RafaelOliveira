<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ConcessionariasTableSeeder::class);
        // $this->call(ConcesusuariosTableSeeder::class);
        // $this->call(EquipesTableSeeder::class);
        // $this->call(EspecialidadesTableSeeder::class);
        // $this->call(ModelosTableSeeder::class);
        // $this->call(StatusagendamentosTableSeeder::class);
        // $this->call(StatusossTableSeeder::class);
        // $this->call(TiposTableSeeder::class);
        // $this->call(UsuariosTableSeeder::class);
        $this->call(FuncionariosTableSeeder::class);

    }
}
