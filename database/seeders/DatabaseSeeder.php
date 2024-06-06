<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $status = [
            'TODO',
            'En cours',
            'Bloqué',
            'A livrer en préproduction',
            'A livrer en production',
            'A recetter',
            'A voir avec le client',
        ];

        $nature = [
            'Front',
            'Back',
        ];

        foreach ($status as $label) {
            Tag::create([
                'label' => $label,
                'type' => 'status',
            ]);
        }

        foreach ($nature as $label) {
            Tag::create([
                'label' => $label,
                'type' => 'nature',
            ]);
        }
    }
}
