<?php include 'headfoot/header.php'?>

<div class="container">
    <h1>Register</h1>
    <?php if($this->session->flashdata('msg'))
    {
        echo "<h3>".$this->session->flashdata('msg')."</h3>";
    }
    ?>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Register/Registeruser '); ?>

<div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="first name" name="fname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="last name" name="lname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Re-enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwordagain">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">select Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option>customer</option>
      <option>artist</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>

</div>

<?php include 'headfoot/footer.php'?>
