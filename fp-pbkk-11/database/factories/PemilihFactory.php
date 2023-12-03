<?php

namespace Database\Factories;

use App\Models\Pemilih;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemilih>
 */
class PemilihFactory extends Factory
{
    protected $model = Pemilih::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'nik' => $this->faker->numberBetween(1000000000000000, 9999999999999999),
            'tps' => $this->faker->numberBetween(1, 5),
        ];
    }
}
