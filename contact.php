<?php
// Add all 
// give feedback
if(!isset($_POST['message']) ||  $_POST['message'] == '') {
        echo "mail not sent";
} else {
    if(!isset($_POST['email']) || $_POST['email'] == '') {
            $_POST['email']='new-resto@Restorants.com';
    }
    if(isset($_POST['nom']) && $_POST['nom'] != '') {
            $_POST['nom']='Annonymus';
    }

    $to      = 'wladduma@gmail.com';
    $subject = 'Message from the nii presentation page !';
    $message = $_POST['message']."  ".$contact;

    $send = mail($to, $subject, $message, " Message from main server page !");
    ($send ? $send = 1 : $send = 0);
    //$url = 'http://niirvana.dev'
    //$url = 'http://localhost/niirvana';
    $url = 'http://knightsofnii.com';
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <?php 
        echo '<meta http-equiv="refresh" content="1;url='.$url.'?send='.$send.'#send">';
        echo '<script type="text/javascript">';
        echo 'window.location.href = "'.$url.'?send='.$send.'#send"';
        echo "</script>";
         ?>
        <title>Page Redirection</title>
    </head>
    <body>
    </body>
</html>
