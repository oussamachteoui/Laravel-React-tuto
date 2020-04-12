<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $categories_ids = App\Category::pluck('id');
    return [

        'name'        => $faker->name,
        'description' => $faker->text,
        'category_id' =>$categories_ids->random(),




    ];
});
