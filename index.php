<?php

class Post {
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published){
        $this->title = $title;
        $this->author  = $author;
        $this->published = $published;
        

    }
}

$posts = [
    new Post('My First Post', 'HugoBoss', true),
    new Post('My Second Post', 'Mark Anthony', true),
    new Post('My Third Post', 'Paul Walker', false),
    new Post('My Fourth Post', 'Andre the Giant', true)

];

// $posts = array_map(function ($post){
//     return (array) $post;
// }, $posts);


$authors = array_column($posts, 'author', 'title');

var_export($authors);


// $unpublishedPosts = array_filter($posts, function ($post){
//     return !$post->published;
// });

// $modifiedArr = array_map(function($post){
//     $post->published = true;
//     return $post;
// }, $posts);

// foreach ($posts as $post){
//     $post->published = true;
// }

// $modifiedArr = array_map(function($post){
//     return ['title' => $post->title];
// }, $posts);

