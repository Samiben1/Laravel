<?php
namespace wap;
use wap\Comments;
include "comment.php";
    class Post{


        function __construct($image, $user , $date, $message){
            $this->user = $user;
            $this->image = $image;
            $this->date = $date;
            $this->message = $message;
            $this->comments = [];
        }

        function getUser(){
            return $this->user;
        }
        
        function getImage(){
            return $this->image;
        }
        
        function getDate(){
            return $this->date;
        }
        function getMessage(){
            return $this->message;
        }

        function addcomment($user, $comment){
            $c1 = new Comments($user,$comment);
            $this->comments[] = $c1;
        }

    }
?>