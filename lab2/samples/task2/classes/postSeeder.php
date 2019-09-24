<?php
namespace wap;
use wap\Post;
include 'post.php';

    class PostSeeder{
        public static function seed(){
            $posts = [];
            $posts[] = new Post("images/1.jpg","Jil","2/2/2222","hi!");
            $posts[] = new Post("images/2.jpg","Bob","1/1/1111","hi!");
            $posts[] = new Post("images/3.jpg","Harry","3/3/3333","hi!");
            return $posts;
        }
    }
?>