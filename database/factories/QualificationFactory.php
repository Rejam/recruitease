<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\Factories\Factory;

class QualificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Qualification::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD', 'Certification', 'Diploma']),
            'description' => $this->faker->realText(),
            'received_at' => $this->faker->date(),
            'candidate_id' => Candidate::factory(),
        ];
    }
}
