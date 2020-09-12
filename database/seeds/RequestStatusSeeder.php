<?php

use Illuminate\Database\Seeder;
use App\RequestStatus;

class RequestStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_statuses')->insert([
            'name' => 'Encerrado',
            'slug' => 'encerrado',
        ]);

        DB::table('request_statuses')->insert([
            'name' => 'Em andamento',
            'slug' => 'em-andamento',
        ]);

        DB::table('request_statuses')->insert([
            'name' => 'Aberto',
            'slug' => 'aberto',
        ]);
    }
}
