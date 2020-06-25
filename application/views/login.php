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


	<form action="<?php echo base_url(); ?>welcome/login_save" method="POST">
       <fieldset>
           <legend>Login User</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name = "email" placeholder="Enter email">
       <span style="color:red"; ><?php echo form_error("email"); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control"  name = "password"  placeholder="Password">
       <span style="color:red"; ><?php echo form_error("password"); ?>
    </div>
    
    <button type="submit" id="save-button" class="btn btn-primary">Submit</button>
     <a href="<?php echo base_url();?>welcome" class="btn btn-default">Register</a>
  </fieldset>
</form>

</div>

</body>
</html>


