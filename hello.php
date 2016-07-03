<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="hello">
<?php
$hi ='Hello User';


function helloTime()
{
    $h = date(H);
    $righTime = $h+1;
    // определяем какой сейчас час на компе
    // от 5-и до 11-и утра, return возвращает Доброе утро
    if ($righTime>=5 && $righTime<=11)
        echo "and good morning!";
    // от 12-и до 16-и Здравствуйте
    if ($righTime>=12 && $righTime<=16)
        echo "and good afternoon! ";
    // от 17-и до 24-х часов Добрый вечер
    if ($righTime>=17 && $righTime<=24)
        echo "and good evening! ";
    // от 0 до 4-х утра Доброй ночи.
    if ($righTime>=24 && $righTime<=4)
        echo "and good night!  ";
}

?>
        <h1>
            <?php
            echo $hi ;
          ?>
            <br>
            <?php
            echo helloTime();
            ?>
<br>
            <?php
            $h = date(H);
            $righTime = $h+1;
            echo $righTime.':'. date(i);
?>
        </h1>

        </div>
    <?php
    function countdown($n){
        if ($n > 0) {
            echo "$n</br> ";
            $n--;
            countdown ($n);
        } elseif ($n == 0){
            echo "$n</br> ";
        }
    }
    countdown(5);


    ?>
</header>
<main>
    
</main>
<footer>
    <h2>Ghetto Geek Developers 2016. ALl rights reserve</h2>
    
</footer>
</body>
</html>

