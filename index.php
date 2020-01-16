<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
</head>
<body>
    <?php
   
    $a= "Hello";
    $b= "World";
    echo "$a $b!";
    echo '<br>';

    // function (date)
    echo "<h2> Set date default timezone</h2>";
    date_default_timezone_set('Europe/Kiev');
    if (date_default_timezone_get()) {
        echo 'date_default_timezone_set: '. date_default_timezone_get() . '<br/>'; } 
    echo '<br>';
    echo date('l jS \of F Y h:i:s A');
    echo '<br>';
    $a = 1;
    $b = 5;

    function Sum1() {
        global $a, $b;
        $b = $a + $b;
    } 
    Sum1();
    echo "a+b=$b";
    echo '<br>';
    $e = 1;
    $f = 2;
    function Sum2()
    {
        $GLOBALS['g'] = $GLOBALS['e'] + $GLOBALS['f'];
    }
    Sum2();
    echo $g;

    echo '<h3>DIRECTORY_SEPARATOR (string)</h3>';
    echo DIRECTORY_SEPARATOR;
    echo '<h3>PATH_SEPARATOR (string)</h3>';
    echo PATH_SEPARATOR;
    echo '<h3>SCANDIR_SORT_ASCENDING (integer)</h3>';
    echo SCANDIR_SORT_ASCENDING;   
    echo '<h3>SCANDIR_SORT_DESCENDING (integer)</h3>';
    echo SCANDIR_SORT_DESCENDING;   
    echo '<h3>SCANDIR_SORT_NONE (integer)</h3>';
    echo SCANDIR_SORT_NONE;


    echo "<br> <br>  <h2>__DIR__ </h2> <br>";
    echo __DIR__;
    echo "<br> <h2> realpath <br> </h2>";
    echo realpath('');
    echo "<br> <h2>_SERVER 'DOCUMENT_ROOT' </h2> <br>";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br> <h2> realpath(__DIR__) </h2> <br>";
    echo realpath(__DIR__);
    echo "<br>";

    define('ROOT', dirname(__DIR__));
    echo "<br>";
    echo ROOT;
    echo "<br>";

    
    // getting user query string (simple and wrong)
    
    // function getURI() {
    // return $_SERVER['REQUEST_URI']

    // correctly
    
    function getURI() {
        if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'], '/');
    }
    
    $uri = getURI();
    echo "<br> URI: ";
    echo  $uri;
   
        




    ?>
</body>
</html>
