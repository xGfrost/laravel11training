<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
        ];
    }

    public static function find($slug): array{
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }
        
        return $post;
    }
}