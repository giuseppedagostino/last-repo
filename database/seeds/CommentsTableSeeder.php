<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $posts = Post::all();

      foreach ($posts as $post) {
        for ($i=0; $i < rand(1, 6); $i++) {
          $comment = new Comment();
          $comment->post_id = $post->id;
          $comment->username = $faker->userName;
          $comment->body = $faker->sentence($nbWords = 300, $variableNbWords = true);
          $comment->save();
        }
      }

    }
}
