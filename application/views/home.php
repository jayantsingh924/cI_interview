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


	<form action="<?php echo base_url(); ?>welcome/register" method="POST">
       <fieldset>
           <legend>Register User</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name = "email" placeholder="Enter email">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
       <span style="color:red"; ><?php echo form_error("email"); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control"  name = "password"  placeholder="Password">
       <span style="color:red"; ><?php echo form_error("password"); ?>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Conferm Password</label>
      <input type="password" class="form-control"  name = "cpassword"  placeholder="Conferm Password">
     
    </div>


    <button type="submit" id="save-button" class="btn btn-primary">Submit</button>
    <a href="<?php echo base_url(); ?>welcome/login" class="btn btn-default">Login</a>
  </fieldset>
</form>

</div>

</body>
</html>


