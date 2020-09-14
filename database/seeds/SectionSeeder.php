<?php

use Illuminate\Database\Seeder;

use App\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Section $section)
    {
        $section->create([
            'name' => 'Motor Diesel',
            'slug' => 'motor-diesel',
        ]);

        $section->create([
            'name' => 'Limpeza/Lubrificação',
            'slug' => 'limpezalubrificacao',
        ]);

        $section->create([
            'name' => 'Sistema de tração',
            'slug' => 'sistema-de-tracao',
        ]);

        $section->create([
            'name' => 'Banca de socaria',
            'slug' => 'banca-de-socaria',
        ]);

        $section->create([
            'name' => 'Grupo de levante',
            'slug' => 'grupo-de-levante',
        ]);

        $section->create([
            'name' => 'Sistema de freio',
            'slug' => 'sistema-de-freio',
        ]);

        $section->create([
            'name' => 'Sistema hidráulico',
            'slug' => 'sistema-hidraulico',
        ]);

        $section->create([
            'name' => 'Sistema pneumático',
            'slug' => 'sistema-pneumatico',
        ]);

        $section->create([
            'name' => 'Sistema elétrico',
            'slug' => 'sistema-eletrico',
        ]);

        $section->create([
            'name' => 'Outros',
            'slug' => 'outros',
        ]);

        $section->create([
            'name' => 'Arado lateral',
            'slug' => 'arado-lateral',
        ]);

        $section->create([
            'name' => 'Caixa de vassoura',
            'slug' => 'caixa-de-vassoura',
        ]);

        $section->create([
            'name' => 'Arado frontal',
            'slug' => 'arado-frontal',
        ]);

        $section->create([
            'name' => 'Arado central',
            'slug' => 'arado-central',
        ]);
    }
}
