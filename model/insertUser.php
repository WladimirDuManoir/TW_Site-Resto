<?php
// selection from the $colonnes where the $test is equal to $id_bon	
// INSERT INTO `site_incidents`.`identifiant` (`id`, `firstname`, `lastname`, `email`, `tel`) 
// VALUES (NULL, 'goreges', 'brassens', 'gb@knightsofnii.com', '0666666666');
	function insertUser ($firstname, $lastname, $email, $tel) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "INSERT INTO `site_incidents`.`users` (`id`, `firstname`, `lastname`, `email`, `tel`) 
			VALUES (NULL, '{$firstname}', '{$lastname}', '{$email}', '{$tel}')");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}