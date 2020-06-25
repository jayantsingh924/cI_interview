<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Learning</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/css/bootstrap.css">

</head>

<body>

  <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Codeigniter CRUD</a>
 

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feature</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>


   </div>  


        <a class="nav-link" href="<?php echo base_url();?>Dashboard" style="color: white;"><h3>Comming Soon</h3></a>
      
</nav>

   
  <div class="container" style="padding-top: 130px;">

  
 
    <div style="padding-bottom: 10px;">
      <a href="<?php echo base_url();?>welcome/blog" class="btn btn-primary"  value ='submit'>Add record</a>
      <a href="<?php echo base_url();?>welcome/logout" class="btn btn-danger">log out</a>

  </div>  

<table class="table table-stripd table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">sr. no.</th>
      <th scope="col">Title</th>
      <th scope="col">created date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
     <?php 
         $row = 0;  $sno = $row+1;
  foreach ($users as $u)
  {

 ?>
     <tr>
       <th scope="row"><?php echo $sno ?></th>
       <td> <?php echo @$u['title'] ?></td>

       <td> <?php echo @$u['created_date'] ?></td>
       <td>
        <a href="<?php echo base_url(); ?>welcome/view_data/<?php echo @$u['id']; ?>">View</a>
         /
         <a href="<?php echo base_url(); ?>welcome/update_data/<?php echo @$u['id']; ?>">Edit</a>
         /
         <a href="<?php echo base_url(); ?>welcome/delete_data/<?php echo @$u['id']; ?>"  style="color:red;">Delete</a>
         </td>
     </tr>

   <?php
     $sno++;

 }



 ?>

 
  </tbody>
</table> 

</div>

   <div style="padding-top: 152px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">User Email : <?php echo $_SESSION['user_email']; ?></a>
     
</nav>


 </body>
</html>

