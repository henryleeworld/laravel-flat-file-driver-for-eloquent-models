<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show() 
    {
        $post = Post::create([
            'title'     => '艾菲爾鐵塔周邊2024大改造，巴黎居民推救樹請願',
            'content'   => '法國巴黎意在2024年奧林匹克運動會之前重新開發規劃艾菲爾鐵塔（Eiffel Tower）周圍地區，當中一項砍22棵樹的計畫卻引發居民反彈。',
            'posted_at' => now()
        ]);

        $post->update([
            'content' => '法新社報導，巴黎市長辦公室希望在艾菲爾鐵塔塔腳搭建旅遊中心和辦公室。建築規劃圖中，可看到半埋沒的建築群覆蓋在綠色植物之中。',
        ]);
    }
}
