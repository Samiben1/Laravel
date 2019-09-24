<?php
namespace wap;

    class Comments{
 

        function __construct($user , $comments){
            $this->user = $user;
            $this->comments = $comments;
        }

        function getComments(){
            return ($this->user. " commented ". $this->comments);
            
        }

    }
?>