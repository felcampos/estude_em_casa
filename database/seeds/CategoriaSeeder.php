<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Checar se a tabela categorias está vazia
        if(DB::table('categorias')->get()->count() == 0){

            DB::table('categorias')->insert([
                ['tipo' => 'Computação'],
                ['tipo' => 'Marketing'],
            ]);

            $this->command->info('categorias seed realizado');

        } else { $this->command->info('categorias já populada. seed NÃO realizado'); }
    }
}
