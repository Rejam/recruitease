<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employer;
use App\Models\Vacancy;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["draft","published","filled"]),
            'start_date' => $this->faker->date(),
            'contract_type' => $this->faker->randomElement(["full-time","part-time","consultant"]),
            'location' => $this->faker->word(),
            'employer_id' => Employer::factory(),
        ];
    }
}
