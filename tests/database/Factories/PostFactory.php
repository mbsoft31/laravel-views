<?php

namespace Mbsoft31\LaravelViews\Tests\database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use Mbsoft31\LaravelViews\Tests\Models\Post;


class PostFactory extends Factory
{
    protected $model = Post::class;

    #[ArrayShape(['title' => "string", 'description' => "array|string"])]
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentences(3, true),
        ];
    }
}

