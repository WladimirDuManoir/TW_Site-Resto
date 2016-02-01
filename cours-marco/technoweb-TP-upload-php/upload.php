<?
// In PHP earlier then 4.1.0, $HTTP_POST_FILES should be used instead of $_FILES.

$uploaddir = "upload/"; // set this to wherever

if(!empty($_FILES["userfile"])) { 
    $filename = $_FILES["userfile"]['name'];

    if (@copy($_FILES['userfile']['tmp_name'],$uploaddir.$filename)) {
	echo "success!"; 
    } else {
	echo "failed";
    }
    
}

?>
