<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'  => User::inRandomOrder()->first()->id,
            'commentable_id'  =>Post::inRandomOrder()->first()->id,
            'commentable_type'  => 'App\\Models\\Post',
            'comment' => $this->faker->realText()
        ];
    }
}
