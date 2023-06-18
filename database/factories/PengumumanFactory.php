<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengumuman>
 */
class PengumumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'=>$this->faker->paragraphs(mt_rand(1,1),true),
            'isi'=>$this->faker->paragraphs(mt_rand(1,1),true),
            'penggalan'=>$this->faker->paragraphs(mt_rand(1,1),true),

        ];
    }
}
