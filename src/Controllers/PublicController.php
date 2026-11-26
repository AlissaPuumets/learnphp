<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some World title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some World content 1',
            ],
            [
                'title' => 'Some World title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some World content 2',
            ],
            [
                'title' => 'Some World title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some World content 3',
            ],
            [
                'title' => 'Some World title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some World content 4',
            ],
        ];
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S content 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some U.S content 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some U.S content 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some U.S content 4',
            ],
        ];
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
        $db = new \App\DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}
