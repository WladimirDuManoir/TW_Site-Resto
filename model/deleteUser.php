<?php

	function deleteUser ($id, &$user_error) {
		global $bddtruc;
		try { 
			$ttcolonnes = $bddtruc->prepare( "DELETE FROM `site_incidents`.`users` WHERE `id`= '{$id}'");
			if ($ttcolonnes->execute() == TRUE) {
				$user_error = "Successfully deleted.";
			} else {
				$user_error = "User can not be deleted first delete correct related incident"; 
			}
		} catch(PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
			return false;
		}
		return true;
	}