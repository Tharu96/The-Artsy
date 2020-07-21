<?php
if(!($this->session->userdata('loggedin')) || $this->session->userdata('type') != "admin")
{
    redirect('Customer_home/Login');
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ART GALLERY</title>
	<style type="text/css">
	</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background-color: #ffffff">
	

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> THE ARTSY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Upload');?>">Add Bidding Image</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Admin/Delete_image');?>">Delete Image</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Artist_manage_C');?>">Artist Management</a>
			</li>
      </li>
    </ul>
  </div>

	<button type="button" class="btn btn-primary">
			My ID <span class="badge badge-light"><?php echo $this->session->userdata('user_id'); ?></span>
			<span class="sr-only">unread messages</span>
	</button>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Admin/about_Us');?>">About Us</a>
		</li>
		<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->session->userdata('fname'); ?>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo base_url('index.php/Admin/index');?>">Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('index.php/Login/Logoutuser') ?>">Log Out</a>
				</div>
		</li>
	</ul>
</nav> 

