<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {

        $post = new Post();
        $post->title = 'Hello World!';
        $post->body = "I'm now building full stack apps in Laravel!";
        $post->user_id = User::first()->id;
        $post->save();

        $post1 = new Post();
        $post1->title = "Welcome, 2nd post!";
        $post1->body = "Aint blogging awesome! It pays my mortgage!";
        $post1->user_id = User::first()->id;
        $post1->save();

    }
}

