<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'Administrador',
            'slug' => 'administrador',
        ]);

        DB::table('user_types')->insert([
            'name' => 'Funcionario',
            'slug' => 'funcionario',
        ]);
    }
}
