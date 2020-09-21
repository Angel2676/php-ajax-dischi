<?php
include 'database.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="dist/app.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Spotify_logo_vertical_black.jpg" alt="logo_spotify">

        </header>


        <ul class="main_content">
            <?php foreach ($database as $value) { ?>
                <li> <img src="<?php echo $value['poster'];?>" alt=""> <h3> <?php echo $value['title'];?> </h3> <h5> <?php echo $value['author'];?> </h5> <span> <?php echo $value['year'];?> </span>
                <?php } ?> </li>
        </ul>



    </body>
</html>
