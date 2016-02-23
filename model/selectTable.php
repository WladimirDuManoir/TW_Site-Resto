<?php

	function selectTable ($table, $limit) {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "SELECT * FROM {$table} LIMIT {$limit}");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}