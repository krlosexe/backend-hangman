<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Words;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Words::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'id_category'=>rand(1,3),
            'name'=> $this->faker->word(5)
        ];
    }
}
