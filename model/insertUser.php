<?php
function handle_sql_errors($query, $error_message)
{
    echo '<pre>';
    echo $query;
    echo '</pre>';
    echo $error_message;
    die;
}
// selection from the $colonnes where the $test is equal to $id_bon	
// INSERT INTO `site_incidents`.`identifiant` (`id`, `firstname`, `lastname`, `email`, `tel`) 
// VALUES (NULL, 'goreges', 'brassens', 'gb@knightsofnii.com', '0666666666');
	function insertUser ($firstname, $lastname, $email, $tel) {
		global $bddtruc;
		try { 
		$ttcolonnes = $bddtruc->prepare( "INSERT INTO `site_incidents`.`users` (`id`, `firstname`, `lastname`, `email`, `tel`) 
			VALUES (NULL, '{$firstname}', '{$lastname}', '{$email}', '{$tel}')");
		$ttcolonnes->execute();
		$c_colonnes = $ttcolonnes->fetchAll();
		} catch(PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
			return false;
		}
		return true;	
	}

	function sec ($string) {
		 return htmlspecialchars($string);
	}