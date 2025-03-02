<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show() 
    {
        $post = Post::create([
            'title'     => __('Two new "Lord of the Rings" movies heading to theaters'),
            'content'   => __('A fresh installment in the "Lord of the Rings" movie series, one of the biggest film franchises of all time, is scheduled to debut in theaters in 2026.'),
            'posted_at' => now()
        ]);

        $post->update([
            'content' => __('Andy Serkis will reprise his role as Gollum and will direct the first of the two films, which has a working title of "Lord of the Rings: The Hunt for Gollum."'),
        ]);
    }
}
