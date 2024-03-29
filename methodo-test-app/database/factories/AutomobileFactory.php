<?php

namespace Database\Factories;

use App\Models\Marque;
use App\Models\Modeles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Automobile>
 */
class AutomobileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marque_id' => Marque::class::pluck("id")->random(),
            'modele_id' => Modeles::class::pluck('id')->random()
        ];
    }
}
