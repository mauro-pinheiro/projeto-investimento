<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'cpf'           => '11122233345',
                'name'          => 'João',
                'phone'         => '35999999999',
                'birth'         => '1960-10-01',
                'gender'        => 'M',
                'email'         => 'joao@email.com.br',
                'password'      =>  env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
            ]
        );
    }
}
