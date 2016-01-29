<!-- INSERT INTO table_name
VALUES (value1,value2,value3,...); 
INSERT INTO `site_incidents`.`identifiant` (`id`, `firstname`, `lastname`, `email`, `tel`) 
VALUES (NULL, 'goreges', 'brassens', 'gb@knightsofnii.com', '0666666666');

-->
<?php
// selection from the $colonnes where the $test is equal to $id_bon	
	function insertIncident ($description, $type, $severite, $pref, $srcImage) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "INSERT INTO `site_incidents`.`users` (`id`, `firstname`, `lastname`, `email`, `tel`) 
VALUES (NULL, {$}, 'brassens', 'gb@knightsofnii.com', '0666666666')");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}