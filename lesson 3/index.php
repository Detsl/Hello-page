<?php
$file = 'test.txt';
$stream = fopen($file, 'r');
$buffer = fread($stream, filesize($file));
fclose($stream);
echo $buffer;
?>