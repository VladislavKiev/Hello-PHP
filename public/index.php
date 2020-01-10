<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <?php
    // commenting options
    /**
     * second option
     */
   

    $a=123.77;
    $b=123;

    $c= "Hello";
    $d= "World";

    

    echo "$c, $d,";
    echo '<br>';


    print_r($a);
    echo '<br>';
    print_r($b);


    echo '<br>';
    var_dump($a);
    echo '<br>';
    var_dump($b);

    $great = 'Hello';
    echo '<br>';
    echo "{ $great} there";
    // Does not work,  show: { Hello  there}
    echo '<br>';
   echo "{$great}  there";
    // Works, show: Hello  there

    ?>
</body>
</html>
