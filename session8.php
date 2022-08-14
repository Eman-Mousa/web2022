<?php
$sdate = strtotime("sunday");
$edate = strtotime("+6 weeks", $sdate);


 
  while ($sdate < $edate) {
    echo date("M d", $sdate) . "<br>";
  $sdate = strtotime("+1 week", $sdate);

  }
?>