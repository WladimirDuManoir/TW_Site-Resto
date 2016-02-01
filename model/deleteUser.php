<?php

	function deleteUser ($id) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "DELETE FROM `site_incidents`.`users` WHERE `id`= '{$id}'");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}