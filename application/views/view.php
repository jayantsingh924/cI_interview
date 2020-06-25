<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter project</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/css/bootstrap.css">

	
	
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">TOXSL Assignment</a>

</nav>
<div class="container" style = "padding-top: 100px; " >
	<div class="jumbotron">

		    <?php 

             foreach($user_data->result_array() as $u)
                   {

           ?>


  <h1 class="display-3"><?php echo $u['title']; ?></h1>
  <p class="lead"><?php echo $u['desc']; ?></p>
  <hr class="my-4">


  <div class="card">
  <h3 class="card-header">Blog image.</h3>

<?php 
  if(is_file(realpath('./uploads/'.@$u['image'])))
      {
?>

  <img style="height: 100%; width: 100%; display: block;"  src="<?php echo base_url(); ?>uploads/<?php echo @$u['image']; ?>"><br>
   
<?php } ?>

 
</div>
</br>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>welcome/dashboard" role="button">Go to Dashboard</a>
  </p>
<?php } ?>
</div>