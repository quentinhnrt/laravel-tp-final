<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = \App\Models\Client::notHavingProjects()->get()->random();

        if (!$client) {
            $client = \App\Models\Employee::all()->random();
        }

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'client_id' => \App\Models\Client::all()->random()->id,
            'project_manager_id' => $client->id,
        ];
    }
}
