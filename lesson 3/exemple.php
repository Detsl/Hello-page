
<?php
include_once 'functions.php';
?>
<html>
<head>
    <title><?=$pageTitle?></title>
</head>
<body>

    <?php
    foreach ($users as $key => $val) {
        ?>
        <li>
            <?=getUserInfo($val)?>
        </li>
        <?php
    }
    ?>

</body>
</html>