<?php

namespace Database\Factories;

use App\Models\Department;
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
        $positions = ['Intern', 'Elite', 'Secretary', 'Accountant', 'Deputy Manager', 'Regular Employee'];
        return [
            "lname" =>fake()->lastName(),
            "fname" =>fake()->firstName(),
            'position' => fake()->randomElement($positions),
            "department_id" =>fake()->randomElement(Department::pluck('id'))
            

        ];
    }
}
