<?php 
//Widok
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>


    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <p> Aktualny czas to : <?php echo $time; ?></p>
        <p>Suma <?php echo $a; ?> i <?php echo $b; ?>
            to <?php echo $sum; ?></p>
        <p>Różnica <?php echo $a; ?> i <?php echo $b; ?>
            to <?php echo $dif; ?></p>

       <a href="/tutorial/site/index">Home</a>
       <a href="/tutorial/site/about">About</a>

    </body>
</html>