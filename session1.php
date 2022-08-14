<?php
$z=10;
function writeMsg() {
    echo "Hello Wolrd!"."<br>";
    	}
writeMsg();
echo "Z outside :".$z."<br>";

function writeMsg1() {
    $z=20;
    echo "Z inside :". $z."<br>";
    	}
writeMsg1();
?>
