<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'text' => $this->faker->sentence,
            'user_avatar' => $this->faker->imageUrl(480),
            'user_handle' => \Str::camel(join('_', $this->faker->words(2))),
            'user_name' => $this->faker->name,
        ];
    }
}
