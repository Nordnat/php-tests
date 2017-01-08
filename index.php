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

<?php
include ('Classes/SecondTestClass.php');
include ('Classes/Part.php');
use Classes\SecondTestClass;
use Classes\Part;
$protection = new SecondTestClass();
$test_object = (array) new Part( 123123, 'klocki', 1231, 'Honda');
?>
<pre>
    <?php var_dump($test_object); ?>
</pre>
<h1><?php echo $protection->getAttribute();  ?></h1>
<!--<h1>--><?php //$test_object;  ?><!--</h1>-->

</body>
</html>
