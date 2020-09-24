

<?php

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="dist/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Spotify_logo_vertical_black.jpg" alt="logo_spotify">
            <select class="container" name="author" id="select-id">
                <option value="">All</option>

            </select>
        </header>



        <ul class="main_content">

        </ul>


        <script id="entry-template" type="text/x-handlebars-template">
            <li><img src="{{poster}}" alt=""> <h3>{{title}}</h3> <h5>{{author}}</h5> <span>{{year}}</span> </li>
        </script>


        <!-- inseriee select -->

        <script id="option-template" type="text/x-handlebars-template">
            <option value="{{ author }}">{{author}}</option>
        </script>
        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
