<?php
$user_error = "";
include_once('littlesFunctions.php');
include_once('model/connectDb.php');
?>

<?php // View  ?>
<?php include_once('myHeader.php'); ?>
<?php include_once('nav.php'); ?>


<?php // Page  ?>
<?php myHeader_fr("Incidents"); ?>
<body>
 <?php myNav("admin"); ?>

<?php if ($user_error !== "") { ?>
<div class="row wow fadeInDown">
	<div class="col-md-12 alert  alert-warning">
		<a href="form.php?no_anim=true" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h4>
			<?php echo $user_error; ?> 
		</h4>
	</div>
</div>
<?php } ?>
<div class="row wow fadeInDown">
  <div class="form-header " data-wow-delay="0.1s">
    <h1>  Site de rapport des incidents.</h1>
    <h4> Rapporter ici touts les incidents.</h4>
 </div>
</div>
<div class="row wow fadeInLeft">
    <h4> TODO </h4>
	 <header>        - do table editor </header>
	<header>       - do a recap of all form info   </header>
	<header>		 - data base </header>
	<header>       - put all html in other doc  </header>
	<header>       - submit page -> reloed page   </header>
	<header>		    - fide best way to debug js</header>
	<header>       - write and check checker for js form   </header>
	<header>       - write all (obligue) js interaction   </header>
	<header>       - do ID generation for images + check file   </header>
</div>

	
<?php include_once('footer.php'); ?>
</body>
<script src="js/wow.min.js"></script>
      <script>
      new WOW().init();
      </script>
</html>