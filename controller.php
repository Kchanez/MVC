<?php
	
	try
	{
		require('Model.php');
		$posts = getposts ();
		if(empty($posts))
		{
			throw new Exception('aucun post n\'a été écrit');
		}
		else 
		{
			//require_once ('Vue.php');
			require_once  ('PartOfIndex/body.php');
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
		
		






		
