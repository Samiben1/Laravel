<?php
    $posts = array();
    $posts[] =  array(
        'name' => 'Sarah Clark',
        'message' => '"Stay confident no matter the situation"',
        'image' => 'images/1.jpg',
        'date' => '2/2/22'
    );
    $posts[] =  array(
        'name' => 'Harry Stark',
        'message' => '"Men in suit are the mordern nights in shiney armor"',
        'image' => 'images/2.jpg',
        'date' => '2/2/22'
    );
    $posts[] =  array(
        'name' => 'Hussain Mohammed',
        'message' => '"sabaaH alkhayr"',
        'image' => 'images/3.jpg',
        'date' => '2/2/22'
    );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <title>Social Network</title>
        <link rel="stylesheet" type="text/css" href="cssfile.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container"> 
            <h1>Social Media</h1>
            <?php foreach($posts as $post) { ?>
                <div class="row" id="containers">
                    <div id="posts">
                        <div class="row">
                            <div class="col-md-6"><img src="<?= $post['image'] ?>" width="160" height="160" alt="user image"></div>
                            <div class="col-md-4"><h5><?= $post['name'] ?></h5>
                                <p><?= $post['message'] ?></p>
                                <h6><?= $post['date'] ?> <br></h6>
                            </div><br>
                            
                        </div><br>
                    </div>
                </div>   
            <?php } ?>
        </div>
    </body>
</html>