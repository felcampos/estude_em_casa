<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Checar se a tabela tipo usuários está vazia
        if(DB::table('users')->get()->count() == 0){

            // Admin
            User::create([
                'tipo_usuario_id' => 1,
                'name' => 'Admin Teste',
                'email' => 'admin@teste.com',
                'password' => bcrypt('123456'),
            ]);

            // Aluno
            User::create([
                'tipo_usuario_id' => 2,
                'name' => 'Aluno Teste',
                'email' => 'aluno@teste.com',
                'password' => bcrypt('123456'),
            ]);
            

            $this->command->info('users: seed realizado.');

        } else { $this->command->info('users: já populada. seed NÃO realizado'); }
    }
}
