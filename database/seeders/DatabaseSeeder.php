<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\Qualification;
use App\Models\Recruiter;
use App\Models\User;
use App\Models\Vacancy;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Recruiter::factory(5)->create();

        Candidate::factory(20)->has(
            Qualification::factory(fake()->numberBetween(1, 3))
        )->create();

        Employer::factory(10)->create();
        Vacancy::factory(50)->create(
            ['employer_id' => Employer::all()->random()->id]
        );

        Application::factory(100)->create(
            [
                'vacancy_id' => Vacancy::all()->random()->id,
                'candidate_id' => Candidate::all()->random()->id,
            ]
        );

        User::factory()->create([
            'name' => 'Ryan James',
            'email' => 'ryan.james@ne6.studio',
            'password' => bcrypt('password'),
        ]);
    }
}
