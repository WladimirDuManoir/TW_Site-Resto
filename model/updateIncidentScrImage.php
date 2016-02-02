<?php
// selection from the $colonnes where the $test is equal to $id_bon	
	function updateIncidentScrImage ($id, $srcImage) {
		global $bddtruc;
		try { 
			$ttcolonnes = $bddtruc->prepare( "UPDATE `site_incidents`.`incident` SET `srcImage` = '{$srcImage}' WHERE `incident`.`id_incident` = '{$id}'");
			$ttcolonnes->execute();
		} catch(PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
			return false;
		}
		return true;	
	}