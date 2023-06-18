<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ukm>
 */
class UkmFactory extends Factory
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
            'tentang'=>$this->faker->paragraphs(mt_rand(1,1),true),
            'ketua'=> fake()->name(),
            'wakil_ketua'=> fake()->name(),
            'sekretaris'=> fake()->name(),
            'bendahara'=> fake()->name(),
            
        ];
    }
}
