<?php
if ($_GET) {
header('Location: http://jd.bukkit.org/rb/apidocs/?org/bukkit/'.$_SERVER['QUERY_STRING']);
} else {
header('Location: http://jd.bukkit.org/rb/apidocs/');
}
?>
