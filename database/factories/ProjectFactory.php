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
            $client = \App\Models\Client::all()->random();
        }

        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->text,
            'client_id' => $client->id,
            'project_manager_id' => \App\Models\Employee::projectManagers()->get()->random()->id,
        ];
    }
}
