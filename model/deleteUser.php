<?php

	function deleteUser ($id) {
		global $bddtruc;
		try { 
			$ttcolonnes = $bddtruc->prepare( "DELETE FROM `site_incidents`.`users` WHERE `id`= '{$id}'");
			$ttcolonnes->execute();
			$c_colonnes = $ttcolonnes->fetchAll();
		} catch(PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
			return false;
		}
		return true;
	}