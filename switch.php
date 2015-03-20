<?php

$actie = isset($_GET['actie']) ? $_GET['actie'] : null;

switch ($actie) {
	case 'toevoegen':
		echo '<a href="switch.php?actie=verwijderen">Click mij</a>';
		break;
	
	case 'verwijderen':
		echo "We zitten nu in verwijderen.";
		break;

	case 'wijzigen':
		echo "We zitten nu in wijzigen.";
		break;
	
	default:
		echo "Nu is er geen actie.";
		break;
}