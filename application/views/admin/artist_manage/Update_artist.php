
<body background= <?php echo base_url('images/update1.jpg');?>>
<div class="container">
<h1>Update form </h2>
<form action = "http://localhost/radp/index.php/Artist_manage_C/update" method ="post">
    <div class="form-group" >
        <b>id no:</b> 
        <input type = 'text' readonly class="form-control" name = "id" value = "<?php echo $data->id;?>" required >
        <small><b>do not change the id</b> </small>
        <br>
        <b>firstName:</b> <input type="text" class="form-control" name="firstname" value="<?php echo $data->firstname;?>" required>
        <small><b>firstname should be over 4 characters</b></small>
        <br>
        <b> secondname:</b> <input type="text" class="form-control" name="secondname" value="<?php echo $data->secondname;?>"required>
        <small><b>secondname should be over 4 characters</b></small>
        <br>
        <b>email:</b> <input type="text" class="form-control" name="email" value="<?php echo $data->email;?>" required>
        <small><b>email should be valid and uniq</b></small>
        <br>
        <b> address:</b> <textarea name="address" class="form-control" rows="5" cols="40" value="" required><?php echo $data->address;?></textarea>
        <br>
        <b>bank account no:</b> <input type = "text" class ="form-control" name ="BAN"  value="<?php echo $data->BAN;?>" required>
    </div>
    
         <input type ="submit" class="btn btn-primary">
</form>


</div>
</body>
</html>
