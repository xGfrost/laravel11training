<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'ILAGOZ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure laborum deserunt voluptatibus, cum ducimus similique dignissimos minima adipisci hic soluta nulla consequatur.'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Jimmy',
            'body' => ' sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure laborum deserunt voluptatibus, cum ducimus similique dignissimos minima adipisci hic soluta nulla consequatur.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'ILAGOZ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure laborum deserunt voluptatibus, cum ducimus similique dignissimos minima adipisci hic soluta nulla consequatur.'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Jimmy',
            'body' => ' sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit facere magnam consequuntur itaque id tempora nam iure laborum deserunt voluptatibus, cum ducimus similique dignissimos minima adipisci hic soluta nulla consequatur.'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
