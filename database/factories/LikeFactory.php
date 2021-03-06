<?php

namespace Database\Factories;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'user_id'  => User::inRandomOrder()->first()->id,
            'likeable_id'  =>Post::inRandomOrder()->first()->id,
            'likeable_type'  => 'App\\Models\\Post',
           
        ];
    }
}
