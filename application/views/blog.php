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

  <?php
    
        $msg = $this->uri->segment(2);
 
        if($msg == 'inserted_blog')
            {
      ?>
           <div class="alert alert-dismissible alert-success">
               <strong>Well done!</strong> You successfully <a href="#" class="alert-link"> added New BLOG.</a>.
           </div>
    <?php
             }
    ?>
	<form action="<?php echo base_url(); ?>welcome/add_blog" method="POST" enctype="multipart/form-data">
       <fieldset>
           <legend>ADD BLOG</legend>
   
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name = "title" placeholder="Enter Blog title">
      <span style="color:red"; ><?php echo form_error("title"); ?>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control" name="desc" rows="3"></textarea>
       <span style="color:red"; ><?php echo form_error("desc"); ?>
    </div>

    <input type="hidden" name="user_id" value = "<?php echo $_SESSION['user_id']; ?>">

    <div class="form-group">
      <label for="exampleInputFile">Image</label>
      <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">This is the field to upload image in your blog.</small>
    </div>


    <button type="submit" id="save-button" class="btn btn-primary">Submit</button>
    <a href="<?php echo base_url(); ?>welcome/dashboard" class="btn btn-default">Dashboard</a>
  </fieldset>
</form>

</div>

</body>
</html>


