<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://mutual-coins.com".$_SERVER['REQUEST_URI']);
exit();
?>
