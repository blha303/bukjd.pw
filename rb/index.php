<?php
require_once '../Mobile_Detect.php';
$detect = new Mobile_Detect;
$location = "http://jd.bukkit.org/rb/apidocs/";
if ( !$detect->isMobile() ) {
  $location .= "?";
}
if ($_GET) {
 if ( substr($_SERVER['QUERY_STRING'], 0, 11) != "org/bukkit/" ) {
  $location = $location."org/bukkit/";
 }
 header('Location: '.$location.$_SERVER['QUERY_STRING']);
} else {
header('Location: '.$location);
}
?>
