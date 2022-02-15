<?php

const br = '<br>';

echo("<a href='Php date.php'> Date Function in PHP </a>");
echo("<br>");
echo("<a href='Php multi dimensional array.php'> Php Multi Dimensional Array</a>");
echo("<br>");

echo("<h1> Associative Array in PHP </h1>");

echo br;

$favCol = array(
  'Yash' => 'Red',
  'Kuldip' => 'Green',
  'Shreyash' => 'Blue',
);

foreach ($favCol as $key => $value) {
  echo("Favourite Colour of$key is $value .<br>");
}

echo br;

$car = array(
  'Bugatti' => 'Jeff Bezos',
  'Tesla' => 'Elon Musk',
  'Lamborghini' => 'Ambani',
);

foreach ($car as $key => $value) {
  echo ("The Crorepati $value has $key .<br>");
}

echo br;

$ourPhone = array(
  'Yash' => 'Asus Zenfone Max Pro M1',
  'Kuldip' => 'Mi Redmi Note 5 Pro',
  'Papa' => 'Realme 2',
);

foreach ($ourPhone as $key => $value) {
  echo("$key Phone is $value .<br>");
}

?>