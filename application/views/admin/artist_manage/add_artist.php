
<body background =<?php echo base_url('images/Art-Galleries-in-karachi.jpg')?>>

    <?php echo validation_errors(); ?>


<div class="container">
    <h1>Add Artist form</h1>
    <form action = <?php echo base_url('index.php/Artist_manage_C/insert')?> method ="post" >
        <div class="form-group">
                <b> firstName:</b> 
                    <input type="text" class="form-control" name="firstname" required>
                    <small><b>firstname should be over 4 characters</b></small>
                    <br>
                <b> secondname:</b>
                    <input type="text"class="form-control" name="secondname" required >
                    <small><b>secondname should be over 4 characters</b></small>
                    <br>
                <b>NIC :</b>
                    <input type = "text" class = "form-control" name = "nic" required>
                    <small><b>nic no  should be over 9 characters</b></small>
                    <br>
                <b> birthday:</b>
                    <input type = "text" class = "form-control" name = "birthday" required>
                    <br>
                <b> email:</b>
                    <input type="email" class="form-control" name="email"  required >
                    <small><b>email should be uniq and valid</b></small>
                    <br>
                <b>address:</b>
                    <textarea name="address" class="form-control" rows="5" cols="40"   required></textarea>
                    <br>
        </div>
        <div class="checkbox">
                <b>Gender:</b>
                    <label><input type="radio" value="female"   name = "gender"  required><b> female</b></label>
                    <label><input type="radio" value="male" name = "gender"  required ><b>male</b></label>
                    <label><input type="radio" value="other" name = "gender"  required><b>Other</b></label>
                <br>
                
                <br>
        </div>
        <div class="form-group">
                <b> bank account no:</b> <input type = "text" class ="form-control" name ="BAN" required>
        </div>
                <input type ="submit" class="btn btn-primary">

    </form>
</div>

</body>
</html>
