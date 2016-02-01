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
include_once('model/connectDb.php');
include_once('model/getColumn.php');
include_once('model/insertUser.php');
insertUser('jean','godin','jg@hry.com','0672434345');

// Controler
// Check type 
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
	&& $_POST['follow']
	/*&& isset($_POST['photo'] )
	&& $_POST['photo']) {*/
	){
	$form_sent = false;
	if (insertUser('oh yeah','godin','jg@hry.com','0672434345')) {

	}
}




?>

<?php // View  ?>
<?php include_once('myHeader.php'); ?>
<?php include_once('nav.php'); ?>
 
<?php myHeader_fr("Incidents Formulaire"); ?>

  <body onLoad="setDate()">
<?php myNav("form"); ?>
  	<script src="js/form.js"></script>
  	<div class="form-header row wow fadeInDown" data-wow-delay="0.1s">
  	<h1> Formulaire de report d'incidents.</h1>
  	<h4> Les champs indiqués par une * sont obligatoires.</h4>
	<header>Remplir l'ensemble des champs pour signaler un incident.</header>
  	</div>

<div class="main">
		<!-- <form name="form1" method="post" action="mailto:pierrerondin@laposte.net?cc=wladduma@gmail.com" enctype="text/plain" onSubmit="return checkSubmit()"> -->

		<form name="form1" method="post" action="form.php" enctype="text/plain" onSubmit="return checkSubmit()">
	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInRight" data-wow-delay="0.1s" >
		    <label for="nom" >Nom*</label>
		    <input aria-describedby="descriptionNom" name="sname" type="text" class="form-control" id="nom" placeholder="Nom"  aria-required="true" required onblur="checkFormElement()" >
		    <div hidden id="descriptionNom">Donnez le nom pour vous identifier.</div>
		  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s" >
		    <label for="prenom">Prénom*</label>
		    <input aria-describedby="descriptionPrenom" name="fname" type="text" class="form-control" id="prenom" placeholder="Prénom"  aria-required="true" required>
		    <div hidden id="descriptionPrenom">Donnez le prénom pour vous identifier.</div>
		  </div>
		</div>
	</div>
		  
	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInRight" data-wow-delay="0.1s">
		    <label for="adresseMail">Addresse Email*</label>
		    <div hidden id="descriptionEmail">Donnez un email ou l'on pourra vous contacter.</div>
		    <input aria-describedby="descriptionEmail" name="email" type="email" class="form-control" id="adresseMail" placeholder="Email" aria-required="true" required>
		  </div>
		</div>
	</div>

	


	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInRight" data-wow-delay="0.1s" >
		     <label for="numeroTel">Numéro de téléphone*</label>
		    <input aria-describedby="descriptionTelephone" name="tel" type='tel' pattern='\d{10}' title='Numéro de téléphone Format: 0666666666 ' 
class="form-control" id="numeroTel" placeholder="0666666666" required aria-required="true">
		    <div hidden id="descriptionTelephone">Donnez le téléphone avec lequelle on peut vous contacter.</div>

 		  </div>
 		</div>
 	</div>

	<div class="row">
		<div class="col-md-12">
		  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s" >
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
		    <input aria-describedby="descriptionDepartement" name="dept"  class="form-control" id="dept" readonly="readonly" placeholder="Departement" aria-required="true" required>
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
		  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s" >
		    <label for="description">Description*</label>
		    <input aria-describedby="descriptionDescription" name="description" type='text' class="form-control" id="description" placeholder="Déscription" aria-required="true" required>
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
		  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s">
			<label for="severite">Sévérité</label><br>
			<label>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Peu urgent"> Peu urgent<br>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Urgent" checked> Urgent<br>
			<input aria-describedby="descriptionUrgence" name="severity" type="radio"  value="Très urgent"> Très urgent</label><br>
		    <div hidden id="descriptionUrgence">Donnez la severité de l'incident, peu urgent, urgent ou trés urgent.</div>
		  </div>
		</div>
		  
		<div class="col-sm-3">
		  <div class="form-group wow fadeInRight" data-wow-delay="0.1s">
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
		  <div class="photo form-group wow fadeInLeft">
		    <label for="exampleFile">Photos</label>
		    <input aria-describedby="descriptionPhoto" name="photo" type="file" id="envoiePhoto">
		    <div hidden id="descriptionPhoto">Donnez une photo de l'incident.</div>
		  </div>
	</div>
	<div class="row submit-btn">
		<button type="submit" class="btn btn-primary btn-lg wow  col-sm-11 col-md-3" data-wow-iteration="infinite">Submit</button> <!-- pulse -->
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