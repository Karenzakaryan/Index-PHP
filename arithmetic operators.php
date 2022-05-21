<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    var_dump(acos(1.1));
    echo "<br>";
    var_dump(1E+500);
    echo "<br>";
    echo -PHP_FLOAT_MAX . "<br>";
    echo PHP_FLOAT_MIN  . "<br>";
    echo PHP_FLOAT_DIG . "<br>";
    echo PHP_FLOAT_EPSILON . "<br>";
    var_dump((int)"18.9");
    echo "<br>";
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    echo "<br>";
    function m()
    {
        echo GREETING;
    }
    m();
    echo "<br>";
    echo PHP_FLOAT_EPSILON;

    ?>
</body>

</html>