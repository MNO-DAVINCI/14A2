<?php

$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
	case 'create':

		/*
			Nodig: Niks!
			1. We gaan een formulier tonen.
			2. Formulier gegevens opslaan in database.
		*/

		break;

	case 'read':
		
		/*
			Nodig: ID record welke uitgelezen moet worden.
			1. Gegevens uitlezen uit database (ID nodig!)
			2. Tonen gegevens uit de database.
		*/

		break;	
	
	case 'update':
		
		/*
			Nodig: ID record wat gewijzigd gaat worden.
			1. Gegevens uitlezen uit database (ID nodig!)
			2. Tonen gegevens database in formulier.
			3. Formulier gegevens updaten in database.
		*/

		break;

	case 'delete':
		
		/*
			Nodig: ID record wat verwijderd moet worden.
			1. Gegevens uitlezen uit database (ID nodig!)
			2. Gegevens tonen in beeld, bevestiging vragen
			3. Gegevens verwijderen, indien bevestigd! Anders terug naar default.
		*/

		break;

	default:
		
		break;
}
