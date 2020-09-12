<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Employee $employee)
    {
        $employee->create([
            'name' => 'Administrador',
            'CPF' => '123.456.789-00',
            'reg' => '1111',
        ]);

        $employee->create([
            'name' => 'Funcionario',
            'CPF' => '098.765.432-11',
            'reg' => '2222',
        ]);
    }
}
