<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://mutual-coins.com".$_SERVER['REQUEST_URI']);
exit();
?>
