<?php 
function uploads ($fileName, &$user_error) {
	// incident info 
	$target_dir = "uploads/";
	$imageFileType = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION);
	$target_file = $target_dir.$fileName.'.'.$imageFileType;
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])
		&& isset($_FILES["fileToUpload"]["tmp_name"])) {
	    $check = @getimagesize($_FILES["fileToUpload"]["tmp_name"]); // BUG NO FILE XXX
	    if($check !== false) {
	        $uploadOk = 1;
	       	
	    } else {
	       	$user_error = "Le fichier n'est pas une image.";
	        $uploadOk = 0;
	    }
	}	

	// Check if file already exists
	if (file_exists($target_file)) {
	    $user_error = "Désolé le fichier existe déjà !";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    $user_error = "Désolé mais le fichier est trrop grand !";
	    $uploadOk = 0;
	}

	if ($uploadOk) {
		if (@copy($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        	$uploadOk = 1;
       } else {
       		$user_error = "Une erreur c'est produite connection impossible. Ressayer plus tard.";
        	$uploadOk = 0;
    	}
	}
	return $target_file;
}