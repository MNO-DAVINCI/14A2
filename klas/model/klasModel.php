<?php

function getStudents($db)
{
	$sql = "SELECT * FROM personen";
 	$stmt = $db->prepare($sql);
 	$stmt->execute();

 	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 	return $result;
}

function getStudent($id, $db)
{
	$sql = "SELECT * from personen WHERE id=$id";
	$stmt = $db->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result;
}