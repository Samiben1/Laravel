<?php
namespace wap;
use wap\Comments;
//include 'post.php';
include 'comments.php';
    class commentSeeder{
        public static function seed(){
            $comments = [];
            $comments[0] = new Comment("Bob","good!");
            $comments[1] = new Comment("Jil","wow!");
            $comments[2] = new Comment("Harry","hi!");
            return $comments;
        }
    }
?>