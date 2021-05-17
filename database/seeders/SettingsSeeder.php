<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SettingsSeeder extends Seeder
{
    const SETTINGS = [
        [
            'key' => 'schedule',
            'value' => 'Пн-Пт: 09:00 - 18:00'
        ],
        [
            'key' => 'mail',
            'value' => 'narsat85@mail.ru'
        ],
        [
            'key' => 'address',
            'value' => 'г. Алматы, ул Толе би 240'
        ],
        [
            'key' => 'instagram',
            'value' => 'https://www.instagram.com/dr.satylgannariman/',
        ],
        [
            'key' => 'number',
            'value' => '77016117380'
        ],
        [
            'key' => 'logo',
            'value' => 'todo'
        ]

    ];

    public function run()
    {
        foreach (self::SETTINGS as $setting) {
            Setting::query()->create([
               'key' => $setting['key'],
               'value' => $setting['value']
            ]);
        }
    }
}
