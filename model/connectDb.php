<?php
try {
		// login root et psw ''
		$bddtruc = new PDO('mysql:host=localhost;dbname=site_incidents', 
			'root', ''); 
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}