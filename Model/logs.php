<?php
$loglist = scan_dir($config["logPath"]);
if ($loglist) {
  foreach ($loglist as $value) {
    $file = fopen($config["logPath"].$value, "r");
    $logs[$value] = fread($file, filesize($config["logPath"].$value));
  }
}
?>
