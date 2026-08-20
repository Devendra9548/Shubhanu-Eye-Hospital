<?php

namespace App\Http\Controllers;

use App\Services\InstagramService;

class InstagramController extends Controller
{
    public function feed(InstagramService $instagram)
    {
        $posts = $instagram->getPosts(6);

        return view('instagram.feed', compact('posts'));
    }
}