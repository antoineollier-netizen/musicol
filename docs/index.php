<?php
	//connexion à la base de données
include_once('modele/connexionMusicol.php');

//gestion des contrôleurs

if (!isset($_GET['section']) OR $_GET['section'] == 'accueilMenu')
{
    	include_once('controleur/accueil.php');
}
else
{
			if ($_GET['section'] == 'instruments')
			{  
				include_once('controleur/instruments.php');
			}
				if ($_GET['section'] == 'coursAssociesInstruments')
			{  
				include_once('controleur/coursInstruments.php');
			}
…
} 
