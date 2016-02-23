<?php
// selection from the $colonnes where the $test is equal to $id_bon	
	function insertIncident ($userID, $description, $severite, 
	 $pref, $srcImage, &$incident_id) {
		global $bddtruc;
		try { 
			$ttcolonnes = $bddtruc->prepare( "INSERT INTO `site_incidents`.`incident` (`id_incident`, `fk_pers`, `description`, `severite`, `pref`, `srcImage`) 
				VALUES (NULL, '{$userID}', '{$description}', '{$severite}', '{$pref}', '{$srcImage}')");
			$ttcolonnes->execute();
			$incident_id = $bddtruc->lastInsertId();
			$c_colonnes = $ttcolonnes->fetchAll();
		} catch(PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
			return false;
		}
		return true;	
	}