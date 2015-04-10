<?php

foreach (glob("controller/*Controller.php") as $filename)
{
    require $filename;
}

foreach (glob("model/*Model.php") as $filename)
{
    require $filename;
}

/*
	Function om views te tonen.
*/
function render($filename) 
{
	global $result;
	
	require("view/_template/header.php");
	require("view/" . $filename . ".php");
	require("view/_template/footer.php");
}