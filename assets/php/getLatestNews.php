<?php
sleep(5);
header("Content-Type: application/json");

$count = 0;
foreach (glob('../news/*') as $new) {
  $dev = explode("{}", file_get_contents($new));
  $array["news"][$count]["filename"] = str_replace("../news/", "", $new);
  $array["news"][$count]["title"] = '<u>' . $dev[0] . '</u>';
  $array["news"][$count]["author"] = $dev[1];
  $array["news"][$count]["time"] = date("d/m/Y - H:i", $dev[2]);
  $array["news"][$count]["content"] = $dev[3];
  $count++;
}

$array["number"] = $count;
$array["status"] = 200;
die(json_encode($array))
