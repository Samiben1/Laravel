<?php
namespace wap;

    class Post{
        protected $user;
        protected $image;
        protected $message;
        protected $date;
        protected $comments;

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

        function getComment(){
            return $this->comments;
        }

        function addComment($user, $comment){
            $this->comments[] = array("user" => $user, "comment" => $comment);
        }
    }
?>