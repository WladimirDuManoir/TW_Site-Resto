<?php

	function deleteIncidents ($id) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "DELETE FROM `site_incidents`.`incident` WHERE `id_incident`= '{$id}'");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}