<?php
// selection from the $colonnes where the $test is equal to $id_bon	
	function getColumn ($colonnes,$test,$id_bon) {
		global $bddtruc;
		$id_bon = (int) $id_bon;
		$ttcolonnes = $bddtruc->prepare( "SELECT * FROM {$colonnes} WHERE {$test} ={$id_bon}");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		
		return $c_colonnes;
	}