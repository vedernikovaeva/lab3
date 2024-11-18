<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::insert([
            ['name' => 'John Doe', 'position' => 'Accountant', 'salary' => 1500, 'children' => 2, 'experience' => 5],
            ['name' => 'Jane Smith', 'position' => 'Manager', 'salary' => 2500, 'children' => 1, 'experience' => 10],
            ['name' => 'Alex Brown', 'position' => 'Clerk', 'salary' => 1000, 'children' => 0, 'experience' => 2],
            ['name' => 'Lisa White', 'position' => 'Accountant', 'salary' => 1800, 'children' => 3, 'experience' => 7],
        ]);
    }
}
