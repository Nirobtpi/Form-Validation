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
echo "<br>";
echo "<br>";
echo "<br>";

$t20 = "My name is Nirob";

$strpos = strpos($t20, 'Nirob');
$strpos1 = stripos($t20, 'nirob');
$strpos2 = strrpos($t20, 'Nirob');

echo $strpos;
echo "<br>";
echo $strpos1;
echo "<br>";
echo $strpos2;
echo "<br>";
echo "<br>";

$trim = "  Hello 
Bangladesh  ";

echo trim($trim);
echo "<br>";
echo "<br>";

$wordwrap = "Hello Bangladesh rrrrrrrrrrrrrr how are you!";

echo wordwrap($wordwrap, 50);
