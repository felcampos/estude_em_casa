<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Checar se a tabela tipo usuários está vazia
        if(DB::table('tipo_usuarios')->get()->count() == 0){

            DB::table('tipo_usuarios')->insert([
                ['txt_usuario' => 'Admin'],
                ['txt_usuario' => 'Aluno'],
            ]);

            $this->command->info('tipo_usuarios seed realizado');

        } else { $this->command->info('tipo_usuarios já populada. seed NÃO realizado'); }
    }
}
