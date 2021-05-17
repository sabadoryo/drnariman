<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DiseaseSeeder extends Seeder
{
    const DISEASES = [
        [
            'name' => 'Врожденная расщелина верхней губы и неба',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],

        [
            'name' => 'Реконструктивная ринохейлопластика',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Рубцовые деформации лица и шеи',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Короткие уздечки верхней губы и языка',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Гемангиома',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Атерома',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Липома',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Киста',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Папиллома',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Микрохирургия',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Деформация ушной раковины',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Микротия',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 1,
        ],
        [
            'name' => 'Профгигиена',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Отбеливание',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Виниры',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Протезирование',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Детская стоматология',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Пародонтология',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Брекеты',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Имплантация All on 4',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Имплантация “под ключ”',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Имплантация All on 6',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Имплантация одномоментная',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Хирургия',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Лечение кариеса',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Имплантация без костной пластики',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],
        [
            'name' => 'Лечение ICON',
            'description' => 'todo',
            'healing_process' => 'todo',
            'service_id' => 2,
        ],

    ];

    public function run()
    {
        $i = 1;
        $j = 1;
        $s = 1;
        foreach (self::DISEASES as $d) {
            $disease = Disease::query()->create([
                'name' => $d['name'],
                'description' => $d['description'],
                'healing_process' => $d['healing_process'],
                'service_id' => $d['service_id']
            ]);

            $disease->media()
                ->create([
                    'path' => "/media/icons/{$j}{$i}.svg",
                    'destiny' => 'icon'
                ]);
            $i++;
            if ($i == 13 && $s == 1) {
                $j = 2;
                $i = 1;
                $s = 2;
            }
        }
    }
}
