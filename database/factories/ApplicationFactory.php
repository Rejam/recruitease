<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Candidate;
use App\Models\Vacancy;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(["draft","pending","accepted","rejected"]),
            'sent_at' => $this->faker->dateTime(),
            'candidate_id' => Candidate::factory(),
            'vacancy_id' => Vacancy::factory(),
        ];
    }
}
