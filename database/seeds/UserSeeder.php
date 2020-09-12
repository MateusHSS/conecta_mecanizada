<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\UserType;
use App\Employee;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type_id' => UserType::where('slug', 'administrador')->first()->id,
            'employee_id' => Employee::where('name', 'Administrador')->first()->id,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('47126'),
        ]);

        DB::table('users')->insert([
            'user_type_id' => UserType::where('slug', 'funcionario')->first()->id,
            'employee_id' => Employee::where('name', 'Funcionario')->first()->id,
            'name' => 'Funcionario',
            'email' => 'funcionario@func.com',
            'password' => Hash::make('47126'),
        ]);
    }
}
