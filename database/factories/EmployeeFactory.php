<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'function' => $this->faker->sentence(rand(1, 2)),
            'role' => $this->faker->randomElement([Employee::DEVELOPER_ROLE, Employee::PROJECT_MANAGER_ROLE]),
            'slug' => $this->faker->slug,
        ];
    }

    public function developer(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => Employee::DEVELOPER_ROLE,
            ];
        });
    }

    public function projectManager(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => Employee::PROJECT_MANAGER_ROLE,
            ];
        });
    }
}
