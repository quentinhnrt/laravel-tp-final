<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Employee;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->generateTags();
        $clients = Client::factory(7)->create();
        $developers = Employee::factory(10)->developer()->create();
        $projectManagers = Employee::factory(3)->projectManager()->create();
        $projects = \App\Models\Project::factory(10)->create();
        $tasks = \App\Models\Task::factory(70)->create();

        $tasks->each(function ($task) use ($developers) {
            $task->employees()->attach($developers->random(2));
        });

        $tasks->each(function ($task) use ($projectManagers) {
            $task->employees()->attach($projectManagers->random());
            $task->tags()->attach(\App\Models\Tag::nature()->get()->random(rand(1, 2)));
            $task->tags()->attach(\App\Models\Tag::status()->get()->random());
        });
    }

    public function generateTags() {
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
