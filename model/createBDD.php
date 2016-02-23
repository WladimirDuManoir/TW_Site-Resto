<?php
// needs connect to data base 
	function creatBDD () {
		global $bddtruc;
		$ttcolonnes = $bddtruc->prepare( "CREATE DATABASE IF NOT EXISTS `site_incidents` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;");
		$ttcolonnes->execute();
	}