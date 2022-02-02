<?php

class Post {
    public $title;

    public $published;

    public function __construct($title, $published){
        $this->title = $title;
        $this->published = $published;

    }
}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', false),
    new Post('My Fourth Post', true),

];

// $unpublishedPosts = array_filter($posts, function ($post){
//     return !$post->published;
// });

$modifiedArr = array_map(function($post){
    $post->published = true;
    return $post;
}, $posts);

foreach ($posts as $post){
    $post->published = true;
}
var_dump($posts);