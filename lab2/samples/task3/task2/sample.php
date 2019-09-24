
<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    $posts[0]->addcomment("Bob", " Beautiful Portrait");
    $posts[0]->addcomment("Jil", " Nic pic");
    $posts[0]->addcomment("Harry", " Fantastic");
    $posts[1]->addcomment("lio","wow");
    $posts[2]->addcomment("Chalana","sabaaH alkhayr")
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
                   <img src= "<?= $post->getImage() ?>" width = "100" height = "100"><br>
                    <?= $post->getUser() ?><br>
                    <?= $post->getDate() ?><br>
                    <?= $post->getMessage() ?><br>
                    <h5>Comments:<h5>
                    <?php $comments = $post->comments;
                        foreach($comments as $comment) { ?>
                            <?= $comment->getComments() ?><br>
                    <?php } ?>
                
                </div>
            <?php } ?>
        </div>
     </body>
</html>