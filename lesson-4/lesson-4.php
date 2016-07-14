<?php
/**
 сам калькулятор
 */

include 'functions.php';


?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<form> <p>Калькулятор</p>
    Введите цифру<input type="text" name="first" placeholder="<?= $_GET["first"]?>">
    Введите цифру<input type="text" name="second" placeholder="<?= $_GET["second"]?>">
    <input type="submit" formmethod="get" name="calc" value="+">
    <input type="submit" formmethod="get" name="calc" value="-">
    <input type="submit" formmethod="get" name="calc" value="*">
    <input type="submit" formmethod="get" name="calc" value="%">
    </form><output>Ваш результат :<?php print calculate ($_GET["first"],$_GET["second"], $_GET["calc"]);  ?></output>


</body>
</html>
