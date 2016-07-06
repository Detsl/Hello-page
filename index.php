<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин кроссовок</title>
</head>


<header>
    <h1>Hello and Welcome to Our Shop </h1>
</header>
<main>
    <nav></nav>
    <?php

    $NAV = [
        1   =>  ["MENU" =>  "Главное меню",
                 "TEXT"  => "Тут главное "

        ],
        2   =>  [ "MENU"    =>  "shop",
                  "TEXT"    =>  "Shop SHop SHop",


        ],
        3   =>  ["MENU"    =>  "contacts",
            "TEXT"    =>  "Contacts Contacts Contacts",

        ]
    ];

$position = isset($_GET['page'])    ?   $_GET['page']   :   null;
    foreach ($NAV as $numberPage => $namePage){
        if (isset($_GET['page'])    &&  $numberPage == $position) {
            echo "<p>Вы в {$namePage['MENU']} </p>";
        }

        else
            echo "<p><a href='?page={$numberPage}'>Здесь {$namePage['MENU']}
</a></p>";}
    ?>



    <section class="news">
        <?php
        if($position) {
            ?>

            <p><h2>Вы выбрали раздел:<?php echo $NAV[$position]['MENU'] ?></h2>
            <p><h3>C содержимым:<?php echo $NAV[$position]['TEXT'] ?></h3>
            <?php
        }
        else {
            ?>
            <h1>Добро пожаловать!</h1>
            <?php
        }
        ?>






    </section>

</main>
<footer>

</footer>
<body>

</body>
</html>




