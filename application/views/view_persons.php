<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>


    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        
        <p>Pierwszy na liście: <?php echo $persons[0]->name; ?></p>

        <h3>Lista osób</h3>
        
        <ul>
            <?php foreach ($persons as $p): ?>
            <li><?php 
            echo $p->id;
            echo "\t";
            echo $p->name; ?> </li>
            <?php endforeach; ?>
            
        </ul>
        
        <a href="/tutorial/site/index">Home</a>
        <a href="/tutorial/site/about">About</a>

    </body>
</html>