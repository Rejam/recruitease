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

        $recruiters = Recruiter::factory(5)->create();
        $candidates = Candidate::factory(50)->has(
            Qualification::factory(fake()->randomElement([1, 2, 3]))
        )->create([
            'recruiter_id' => fake()->randomElement($recruiters)->id,
        ]);

        $employers = Employer::factory(20)->has(
            Vacancy::factory(fake()->randomDigit())
        )->create();

        Application::factory(100)->create([
            'candidate_id' => fake()->randomElement($candidates),
            // 'vacancy_id' => fake()->randomElement($candidates),
        ]);

        User::factory()->create([
            'name' => 'Ryan James',
            'email' => 'ryan.james@ne6.studio',
            'password' => bcrypt('password'),
        ]);
    }
}
