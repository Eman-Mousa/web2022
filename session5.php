<?php
$array = array(
    "name" => "eman",
    "age" => "15",
);
asort($array);
echo $array["name"].".<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$names = array("ali", "ahmed");
sort($names);
echo $names[0].".<br>";

$family = array (
    array("eman",20),
    array("ali",15),
    array("saba",5),
  );
  echo $family[0][0].$family[0][1].".<br>";

?>