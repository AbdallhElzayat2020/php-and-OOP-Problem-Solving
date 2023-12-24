<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h3>Colors</h3>
    <?php
    $colors =["red","blue","green","black","yellow"];
    $i=0;
    ?>
    <h2><?php echo $colors[$i];?></h2>
    <h2><?php echo $colors[++$i];?></h2>
    <h2><?php echo $colors[++$i];?></h2>
    <h2><?php echo $colors[++$i];?></h2>
    <h2><?php echo $colors[++$i];?></h2>
    </body>
</html>