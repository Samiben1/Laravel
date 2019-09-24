<?php
namespace wap;
use wap\Post;
include 'post.php';

    class PostSeeder{
        public static function seed(){
            $posts = [];
            $posts[] = new Post("Jil","hi!");
            $posts[] = new Post("Bob","hi!");
            $posts[] = new Post("Harry","hi!");
            return $posts;
        }
    }
?>