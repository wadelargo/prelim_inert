<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Department::factory()->create([
            'name' => 'Marketing',
            'head' => 'Jonathan Ruba',
            ]);
        Department::factory()->create([
            'name' => 'Sales',
            'head' => 'Angelo Badilla',
            ]);
        Department::factory()->create([
            'name' => 'Research and Development',
            'head' => 'Lee Traveros',
            ]);
        Department::factory()->create([
            'name' => 'Chief Executive Officer Office',
            'head' => 'Darel Tibong',
            ]);
        Department::factory()->create([
            'name' => 'Customer Service',
            'head' => 'Kyle Daga-ang',
            ]);
    }
}
