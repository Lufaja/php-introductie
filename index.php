<?php
echo "<h1> Hello World!</h1>";
echo "Hello World! <br>";
$txt = "Hello World! <br>";
$txt2 = "Learning PHP";
echo $txt;
define ("txt3", "Hello World! <br>");
$txt2 = txt3;
echo $txt2;
$hello = "Hello";
$world = " World!";
$prints ="<html> <h1> $hello, $world</h1> </html>";
echo $prints; 

$num1 = rand(10,100);
$num2 = rand(10,100);

echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";

echo "<br>";

for ($x = 1; $x <= 10; $x++) {
    echo "6 * $x = " . (6 * $x) . "<br>";
}