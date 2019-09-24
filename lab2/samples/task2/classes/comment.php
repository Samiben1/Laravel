<?php
namespace wap;

    class Comments{
        protected $user;
        protected $comments;

        function __construct($user , $comments){
            $this->user = $user;
            $this->comments = $comments;
        }

        function getUser(){
            return $this->user;
        }

        function getComments(){
            return $this->comments;
            
        }
        
        function newComment($user, $comment){
            $this->comments[] = array("user" => $user, "comment" => $comment);
        }

    }
?>