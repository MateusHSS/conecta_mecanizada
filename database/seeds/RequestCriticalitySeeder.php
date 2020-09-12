<?php

use Illuminate\Database\Seeder;
use App\RequestCriticality;

class RequestCriticalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RequestCriticality $requestCriticality)
    {
        $requestCriticality->create([
            'name' => 'Crítico',
            'slug' => 'critico',
        ]);

        $requestCriticality->create([
            'name' => 'Médio',
            'slug' => 'medio',
        ]);

        $requestCriticality->create([
            'name' => 'Leve',
            'slug' => 'leve',
        ]);
    }
}
