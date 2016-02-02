<!-- INSERT INTO table_name
VALUES (value1,value2,value3,...); 
INSERT INTO `site_incidents`.`identifiant` (`id`, `firstname`, `lastname`, `email`, `tel`) 
VALUES (NULL, 'goreges', 'brassens', 'gb@knightsofnii.com', '0666666666');

-->
<?php
// selection from the $colonnes where the $test is equal to $id_bon	
	function insertIncident ($userID, $description, $type, $severite, $pref, $srcImage) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "INSERT INTO `site_incidents`.`incident` (`id_incident`, `fk_pers`, `description`, `type`, `severite`, `pref`, `srcImage`) 
			VALUES (NULL, '{$userID}', '{$description}', '{$type}', '{$severite}', '{$pref}', '{$srcImage}')");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}