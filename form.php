<?php

//       - do table editor 
   
// TODO :
//       - do a recap of all form info   
// 		 - images
// 		 - Attention graded on the photo id problem 

//		 - data base 
//       - put all html in other doc  
//       - submit page -> reloed page   
//		    - fide best way to debug js
//       - write and check checker for js form   
//       - write all (obligue) js interaction   
//       - do ID generation for images + check file   

// TODO create BDD if non exist
//include_once('model/createBDD.php');
//creatBDD();
include_once('littlesFunctions.php');
include_once('model/connectDb.php');
include_once('model/getColumn.php');
include_once('model/insertUser.php');
include_once('model/insertIncident.php');
include_once('uploads.php');
// No animation on all form (not applied on user_message)
$no_anim = false;
// Has the form information 
$form_completed = false;
// Debug variable
$debug = false;
$user_error = "";
$debug_text = "it works !";
// Controler
if( isset($_POST['sname'] )
	&& $_POST['sname']
	&& isset($_POST['fname'] )
	&& $_POST['fname']
	&& isset($_POST['email'] )
	&& $_POST['email']
	&& isset($_POST['tel'] )
	&& $_POST['tel']
	&& isset($_POST['date'] )
	&& $_POST['date']
	&& isset($_POST['description'] )
	&& $_POST['description']
	&& isset($_POST['severity'] )
	&& $_POST['severity']
	&& isset($_POST['follow'] )
	&& $_POST['follow']) {
	$form_sent = false;

	// user info 
	if (insertUser(sec($_POST['sname']),
		sec($_POST['fname']),
		sec($_POST['email']),
		sec($_POST['tel'])) ) {
			$form_sent = true;
		// TODO Login same user ! 
		$filename = uploads("tralalera", $user_error);
	}

	// incident info
	// TODO
	if($form_sent) {
		if (insertIncident("98",
			sec($_POST['description']),
			"1", // TODO
			sec($_POST['severity']),
			sec($_POST['follow']),
			sec($filename))) {
			$form_sent = true;
		}
	}
	$no_anim = true;
	$form_completed = true;

} else {
	if(isset($_GET['no_anim'] )
	 && $_GET['no_anim']) {
		$no_anim = $_GET['no_anim'];
	} else {
		$no_anim = false;
	}
}

insertIncident("98","sf","1","2","4","dsfsd");
?>

<?php // View  ?>
<?php include_once('myHeader.php'); ?>
<?php include_once('nav.php'); ?>
 
<?php myHeader_fr("Incidents Formulaire"); ?>

  <body onLoad="setDate()">
<?php myNav("form"); ?>
  	<script src="js/form.js"></script>
  	<?php if ($form_completed) { ?>
	  	<div class=" row wow fadeInDown">
	  		<div class="col-md-12">
	  		<?php if ($form_sent && $user_error == "") { ?>
	  		<div class="col-md-12 alert alert-success">
	  			<a href="form.php?no_anim=true" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  			<h4>Votre incident a été enregistré ! </h4>
	  		</div>
  			<?php } ?>
	  		<?php if (!$form_sent && $user_error == "") { ?>
	  		<div class="col-md-12 alert alert-danger">
	  			<a href="form.php?no_anim=true" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  			<h4>
	  				Votre message n'a pas été envoyer. 
	  				<br> La connection avec le server n'a pas pue se faire. 
	  				<br> Vérifier votre réseaux. Essayer de nouveau dans 15 minutes. 
	  			</h4>
	  		</div>
  			<?php } ?>
  			<?php if ($user_error !== "") { ?>
	  		<div class="col-md-12 alert  alert-warning">
	  			<a href="form.php?no_anim=true" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  			<h4>
	  				<?php echo $user_error; ?> 
	  			</h4>
	  		</div>
  			<?php } ?>
	  		</div>
	  	</div>
  	<?php } ?>
  	<?php if ($debug) { ?>
  		<div class=" row wow fadeInDown">
	  		<div class="col-md-12">
		  		<div class="col-md-12 alert alert-success">
		  			<a href="form.php?no_anim=true" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  			<h4>
		  				<?php echo $debug_text; ?>
		  			</h4>
		  		</div>
	  		</div>
	  	</div>
  	<?php } ?>
  	<div class="form-header row <?php echo ($no_anim ? '' : 'wow') ?> fadeInDown" data-wow-delay="0.1s">
  	<h1> Formulaire de report d'incidents.</h1>
  	<h4> Les champs indiqués par une * sont obligatoires.</h4>
	<header>Remplir l'ensemble des champs pour signaler un incident.</header>
  	</div>

<div class="main">
		<!-- <form name="form1" method="post" action="mailto:pierrerondin@laposte.net?cc=wladduma@gmail.com" enctype="text/plain" onSubmit="return checkSubmit()"> -->

		<form name="form1" method="post" action="form.php?no_anim=true" onSubmit="return checkSubmit()" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInRight" data-wow-delay="0.1s" >
		    <label for="nom" >Nom*</label>
		    <input  value="todebug" aria-describedby="descriptionNom" name="sname" type="text" class="form-control" id="nom" placeholder="Nom" aria-required="true" required onblur="checkFormElement()" >
		    <div hidden id="descriptionNom">Donnez le nom pour vous identifier.</div>
		  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInLeft" data-wow-delay="0.1s" >
		    <label for="prenom">Prénom*</label>
		    <input  value="todebugSurname" aria-describedby="descriptionPrenom" name="fname" type="text" class="form-control" id="prenom" placeholder="Prénom"  aria-required="true" required>
		    <div hidden id="descriptionPrenom">Donnez le prénom pour vous identifier.</div>
		  </div>
		</div>
	</div>
		  
	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInRight" data-wow-delay="0.1s">
		    <label for="adresseMail">Addresse Email*</label>
		    <div hidden id="descriptionEmail">Donnez un email ou l'on pourra vous contacter.</div>
		    <input  value="todebug@mail.ciom" aria-describedby="descriptionEmail" name="email" type="email" class="form-control" id="adresseMail" placeholder="Email" aria-required="true" required>
		  </div>
		</div>
	</div>

	


	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInRight" data-wow-delay="0.1s" >
		     <label for="numeroTel">Numéro de téléphone*</label>
		    <input  value="0000000000" aria-describedby="descriptionTelephone" name="tel" type='tel' pattern='\d{10}' title='Numéro de téléphone Format: 0666666666 ' 
class="form-control" id="numeroTel" placeholder="0666666666" required aria-required="true">
		    <div hidden id="descriptionTelephone">Donnez le téléphone avec lequelle on peut vous contacter.</div>

 		  </div>
 		</div>
 	</div>

	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInLeft" data-wow-delay="0.1s" >
		    <label for="date">Date*</label>
		    <input aria-describedby="descriptionDate" name="date" type='date' class="form-control" id="date" placeholder="Date" aria-required="true" required>
		    <div hidden id="descriptionDate">Donnez la date à laquelle l'incident c'est produit.</div>
		  </div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s" >
		    <label for="dept">Departement*</label>
		    <input  value="" aria-describedby="descriptionDepartement" name="dept"  class="form-control" id="dept" readonly="readonly" placeholder="Departement" aria-required="true" required>
		    <select name="listDept" size="1" onChange="setDepartement()">
				<OPTION>1
				<OPTION>2
				<OPTION>3
				<OPTION>4
				<OPTION>5
			</select>
		    <div hidden id="descriptionDepartement">Donnez votre département.</div>
		  </div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-md-12">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInLeft" data-wow-delay="0.1s" >
		    <label for="description">Description*</label>
		    <input  value="a description to debug" aria-describedby="descriptionDescription" name="description" type='text' class="form-control" id="description" placeholder="Déscription" aria-required="true" required>
		  </div>
		    <div hidden id="descriptionDescription">Donnez la description complète de l'incident.</div>
		</div>
	</div>

<!-- 	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInRight" data-wow-delay="0.1s" >
		    <label for="localisation">Localisation*</label>
		    <input aria-describedby="descriptionLocalisation" name="loca" type='text' class="form-control" id="localisation" placeholder="Localisation" aria-required="true" required>
		    <div hidden id="descriptionLocalisation">Donnez la localisation de l'incident.</div>
		  </div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-sm-3">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInLeft" data-wow-delay="0.1s">
			<label for="severite">Sévérité</label><br>
			<label>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Peu urgent"> Peu urgent<br>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Urgent" checked> Urgent<br>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Très urgent"> Très urgent</label><br>
		    <div hidden id="descriptionUrgence">Donnez la severité de l'incident, peu urgent, urgent ou trés urgent.</div>
		  </div>
		</div>
		  
		<div class="col-sm-3">
		  <div class="form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInRight" data-wow-delay="0.1s">
			<label for="suivi">Suivi</label><br>
			<label>
			<input aria-describedby="descriptionSuivi" name="follow" type="radio" name="group2" value="Web"> Web<br>
			<input aria-describedby="descriptionSuivi" name="follow" type="radio" name="group2" value="Mail"> Mail<br>
			<input aria-describedby="descriptionSuivi" name="follow" type="radio" name="group2" value="Telephone" checked> Téléphone</label><br>
		    <div hidden id="descriptionSuivi">Donnez la méthode que vous préférer pour la suivi de l'incident.</div>
			</div>
		</div>
	</div>

	<div class="row">
		  <div class="photo form-group <?php echo ($no_anim ? '' : 'wow') ?> fadeInLeft">
		    <label for="exampleFile">Photos</label>
		    <input aria-describedby="descriptionPhoto" name="fileToUpload" type="file" id="fileToUpload">
		    <div hidden id="descriptionPhoto">Donnez une photo de l'incident.</div>
		  </div>
	</div>
	<div class="row submit-btn">
		<button name="submit" type="submit" class="btn btn-primary btn-lg <?php echo ($no_anim ? '' : 'wow') ?>  col-sm-11 col-md-3" data-wow-iteration="infinite">Submit</button> <!-- pulse -->
	</div>
</form>
	</div>

	</div>

	<?php include_once('footer.php'); ?>

  </body>
   <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</html>

<!-- TODO DoNotTrack -->