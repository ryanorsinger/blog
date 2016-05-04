<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->title = "One weird trick to get your javascript working.";
        $post->body = "It's more than just console.log() everywhere... There's console.table() and all... but how we're going to use Chrom's debug tool with break points. Here's how to get started:";
        $post->user_id = User::first()->id;
        $post->created_at = "2016-01-19 16:52:16";
        $post->save();

        $post1 = new Post();
        $post1->title = "Learn You a JavaScript for Great Good!";
        $post1->body = "From its humble origins as a way to animate buttons, JavaScript won the browser. Now, we're seeing JS run server-side and even program robots";
        $post1->user_id = User::first()->id;
        $post1->save();

    }
}

