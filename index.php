<?php
    include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Throwback Hit Songs</h1>
        <br/>
        <style>
            @import url("css/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
    
    <body>
        <div id = "main">
            <?php
                Go();
                echo "<br/>";
            ?>
        </div>
    </body>
    <br/>
    <main align="center">
        <br/>
        <div id="playButton">
            <form>
                <button class="button" style="vertical-align:middle"><span>Next Song</span></button>
            </form>
        </div>
    </main>
    <br/>
    <h2>Other Related Albums</h2>
    <footer align="center">
        <?php
            displayAlbums();
        ?>
    </footer>

</html>