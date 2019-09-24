
<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    $posts[0]->addcomment("Bob", " I am bob!");
    $posts[0]->addcomment("Jil", " He is bob!");
    $posts[0]->addcomment("Harry", " Yes!");
    $posts[1]->addcomment("lio","wow");
    
    //var_dump($posts);
    //exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Posts class</title>
        <link rel="stylesheet" type = "text/css" href="cssfile.css">
    </head>
    <body>
        <div id = "container"> 
            <h1>Social media</h1>
            <?php foreach($posts as $post) { ?>
                <br>
                <div id="posts">
                   
                    <?= $post->getUser() ?>
                    <?= $post->getMessage() ?><br>
                    <h5>Comments:<h5>
                    <?php $comments = $post->getComment();
                        foreach($comments as $comment) { ?>
                            <?= $comment["user"] ?> said <?= $comment["comment"] ?><br>
                    <?php } ?>
                
                </div>
            <?php } ?>
        </div>
     </body>
</html>