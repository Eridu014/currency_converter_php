<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lira = 500;
  $lek = 9094;


  echo "At the start of your journy, you had " . $riel . " riel, " . $kyat . " kyat, " . $krones . " krones, " . $lira . " lira " . "and " . $lek . " lek.";


  $riel_to_usd = 0.00025;
  $kyat_to_usd = 0.00055;
  $krones_to_usd = 0.12;
  $lira_to_usd = 0.10;
  $lek_to_usd = 0.0090;

$usd_from_riel = $riel * $riel_to_usd;
 
echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";
$usd_from_kyat = $kyat * $kyat_to_usd;
 
echo "\nYour $kyat kyat were exchanged for $usd_from_kyat usd.";
$usd_from_krones = $krones * $krones_to_usd;
 
echo "\nYour $krones krones were exchanged for $usd_from_krones usd.";
$usd_from_lira = $lira * $lira_to_usd;
 
echo "\nYour $lira lira were exchanged for $usd_from_lira usd.";
$usd_from_lek = $lek * $lek_to_usd;
 
echo "\nYour $lek lek were exchanged for $usd_from_lek usd.";
?>