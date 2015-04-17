<?php

function loadControllers() 
{
	foreach (glob("controller/*Controller.php") as $filename)
	{
	    require $filename;
	}
}

function loadModels()
{
	foreach (glob("model/*Model.php") as $filename)
	{
	    require $filename;
	}
}

function makeDatabaseConnection()
{
	$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS);
	return $db;
}

/*
	Function om views te tonen.
*/
function render($filename, $data = null) 
{	
	require("view/_template/header.php");
	require("view/" . $filename . ".php");
	require("view/_template/footer.php");
}