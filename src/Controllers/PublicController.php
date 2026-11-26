<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = Post::where('category', 'world');
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = Post::where('category', 'us');
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';
        $posts = [
            [
                'title' => 'PHP 8.4 brings property hooks',
                'date' => 'November 20, 2026',
                'author' => 'Alissa',
                'body' => 'Property hooks let you define get and set logic directly on a class property, so you need far fewer getter and setter methods.',
            ],
            [
                'title' => 'Why every developer should learn Git',
                'date' => 'November 22, 2026',
                'author' => 'Alissa',
                'body' => 'Git keeps a full history of your code, lets you try ideas on branches and makes working in a team much easier.',
            ],
            [
                'title' => 'Docker for local development',
                'date' => 'November 24, 2026',
                'author' => 'Alissa',
                'body' => 'With Docker you can start a database like MySQL with one command, without installing it on your own computer.',
            ],
        ];
        view('tech', compact('title', 'posts'));
    }

    public function test() {
        $db = new DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}
