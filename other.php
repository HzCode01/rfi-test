<?php

$cmd = null;

if(isset($_GET["cmd"])){

	$cmd = $_GET["cmd"];

	echo shell_exec("whoami");

}

?>
