<?php
////
////for ($i=1;$i<=100;$i++) {
////    if($i%2==0) {
////        echo "$i is even";
////    }else{
////        echo "$i is odd";
////    }
////    echo $i . "<br>";
////}
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php ?>
<h1>Hello, Loop!</h1>
<?php
$colors=["red","green","black","light","blue","yellow"];
$i=0;
$count=count($colors);
?>
<ul>
    <?php while ($i<$count):?>
    <li class="<?php if ($colors[$i]=="green"){ echo "bg-success text-white";};?>"><?php echo $colors[$i];?></li>
        <?php $i++;?>
    <?php endwhile;?>
</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>