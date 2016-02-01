<?php 
// TODO create BDD if non exist
//include_once('model/createBDD.php');
//creatBDD();

  // Controler
  include_once('model/connectDb.php');
  include_once('model/deleteUser.php');
  
  // Delete GET id 
  if (isset($_GET['id']) 
    && $_GET['id'] != '' 
    &&  is_numeric($_GET['id'])
    && $_GET['delete'] == '1') {
    deleteUser($_GET['id']);
  }

  // Get info 
  include_once('model/selectTable.php');
  $usersSelection = selectTable('users','50');
  $users = $usersSelection;
  // if more than 50 add arrows
?>


<?php // View  ?>
<?php include_once('myHeader.php'); ?>
<?php include_once('nav.php'); ?>
 
<?php myHeader_fr("Incidents"); ?>
  <body>
    <?php myNav("admin"); ?>
    
  	<!-- <button type="button" class="btn btn-default">Set Data Base</button>
  	<a href="model/create_ddb.php" class="btn btn-default" role="button">Set Data Base</a> -->

    <div class="">
<table class="table table-hover">
  <thead> 
    <tr>
      <th>#</th>
      <th>Prénom</th>
      <th>Nom de famille</th>
      <th>E-mail</th>
      <th>Téléphone</th>
      <th>Supprimer</th>
    </tr>
  </thead> 
  <tbody>
    <?php foreach ($users as &$row) { ?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['firstname']?></td>
      <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['tel']?></td>
      <td><a href="?<?php echo 'delete=1&id='.$row['id']; ?>" role="button" class="btn btn-danger">x</a></td>
    </tr>
    <?php } ?>
  </tbody>
  <tr>
      <th><a href="form.php" role="button" class="btn btn-success">+</a></th>
    </tr>
</table>
    </div>

<?php include_once('footer.php'); ?>


  </body>
   <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</html>