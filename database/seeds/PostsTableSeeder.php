<?php

use Illuminate\Database\Seeder;
// Faker
use Faker\Generator as Faker;
// Slug
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // genero 10 post con faker
        for ($i=0; $i < 10; $i++) { 
            $newPost = new Post();

            $newPost->title = $faker->sentence(4);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->subtitle = $faker->sentence(9);
            $newPost->image = $faker->imageUrl(640, 480, 'nature');
            $newPost->author = $faker->name();
            $newPost->content = $faker->text(750);
            // $newPost->publication_date = $faker->date();

            $newPost->save();
        }
    }
}
