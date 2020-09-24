<?php
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "::1" || $REMOTE_ADDR == "127.0.0.1") {
	include("class/ip_in.php");
} else {
	include("class/ip_out.php");
}
?>