<?php
for ($i = 'a'; $i < 'z'; $i++) {
    echo $i . ord($i) . " ";
}
echo "<br>";
echo "<br>";

$string = "Hello Wrold";
echo strlen($string) . "<br>";
echo substr($string, 1, 4) . "<br>";
echo substr($string, -5, -3) . "<br>";

echo strrev($string);
echo "<br>";
echo "<br>";
$new = explode(" ", $string);
$rev = array_reverse($new);
$join = join(" ", $rev);
$my = strrev($join);
echo $my;
echo "<br>";
echo "<br>";
print_r($rev);
echo "<br>";
echo "<br>";
$srt = "Hello Wrold How Are You";



$part = str_split($srt);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
print_r($part);
