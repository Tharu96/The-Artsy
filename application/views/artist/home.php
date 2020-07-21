<?php include 'headfoot/header.php' ?>

		<div class = "container">
    <h1>Add New Art <span><a href="#"> < Add New</a></span></h1>
    <p>Please fill this form and submit to add new art information record to the database.</p>

    <form method="post" action="<?php echo base_url('index.php/Artist/form_validation'); ?> ">
    	<?php
    		if($this->uri->segment(2) == "inserted"){
          // Home - segment(1)
          // inserted - segment(2)
    			echo '<p class="text-success">Data Inserted</p>';
    		}
    	?>

      <?php
        if(isset($user_data)){
            foreach($user_data as $row){
       ?>
        
   <div class="form-group">
    <label>Artist Name</label>
    <input type="text" name="Artist_Name" value="<?php echo $row = '$Artist_Name'; ?>" class="form-control" />
    <span class="text-danger"><?php echo form_error("Artist_Name"); ?>
    </span>
   </div>

   <div class="form-group">
    <label>Art Name</label>
    <input type="text" name="Art_Name" value="<?php echo $row = '$Artist_Name'; ?>" class="form-control" />
    <span class="text-danger"><?php echo form_error("Art_Name"); ?>
    </span>
   </div>

   <div class="form-group">
    <label>Category</label>
    <input type="text" name="Category" value="<?php echo $row = '$Category'; ?>" class="form-control" />
    <span class="text-danger"><?php echo form_error("Category"); ?>
    </span>
   </div>
  
    <!-- <?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
    <?php echo form_error('userfile','<div class="text-danger">', '</div>' ); ?>
    <br><hr> -->

  <div class="form-group">
    <label>Directory</label>
    <input type="file" name="Path" value="<?php echo $row = '$Path'; ?>" class="form-control" />
    <span class="text-danger"><?php echo form_error("Path"); ?>
    </span>
   </div> 

    <div class="form-group">
    <input type="hidden" name="hidden_id" value="<?php echo $row = 'Art_Id'; ?>"/>
    <button type="submit" name="update" class="btn btn-success">Update</button>
    <button type="submit" name="submit" class="btn btn-danger"><a href="<?php echo base_url ('index.php/Artist/add_view'); ?>">Cancel</a></button>
    </div>
      <?php        
            }
          
        }
    else{

        
      ?>

   <div class="form-group">
    <label>Artist Name</label>
    <input type="text" name="Artist_Name" class="form-control" />
    <span class="text-danger"><?php echo form_error("Artist_Name"); ?>
    </span>
   </div>

   <div class="form-group">
    <label>Art Name</label>
    <input type="text" name="Art_Name" class="form-control" />
    <span class="text-danger"><?php echo form_error("Art_Name"); ?>
    </span>
   </div>

   <div class="form-group">
    <label>Category</label>
    <input type="text" name="Category" class="form-control" />
    <span class="text-danger"><?php echo form_error("Category"); ?>
    </span>
   </div>

    <!--  <?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
    <?php echo form_error('userfile','<div class="text-danger">', '</div>' ); ?>
    <br><hr>  -->

 <div class="form-group">
    <label>Directory</label>
    <input type="file" name="Path" class="form-control" />
    <span class="text-danger"><?php echo form_error("Path"); ?>
    </span>
   </div> 

   <div class="form-group">
   <button type="submit" name="submit" class="btn btn-success">Insert</button>
   <button type="submit" name="submit" class="btn btn-danger"><a href="<?php echo base_url ('index.php/Artist/add_view'); ?>">Cancel</a></button>
   </div>
    <?php

   } 
    ?> 

   </form>

<br/><br/>

<h3> Art Details </h3><br/>
<div class= "table-responsive">
  <table class="table table-bordered">
   
   <?php // table headers below ?>
    
    <tr>
      <th>Art_Id</th>
      <th>Artist Name</th>
      <th>Art Name</th>
      <th>Category</th>
      <th>Directory</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>

     <?php
     if($fetch_data->num_rows() !== 0){
        foreach($fetch_data->result() as $row){
         ?>      
             <tr>
                <td><?php echo $row->Art_Id; ?></td>
                <td><?php echo $row->Artist_Name; ?></td>
                <td><?php echo $row->Art_Name; ?></td>
                <td><?php echo $row->Category; ?></td>
                
                <td><?php echo $row->Path; ?></td>
                <td><a href = "#" class="delete_data btn btn-danger" Art_Id="<?php echo $row->Art_Id; ?>">Delete</a></td>
                <td><a href="<?php echo base_url(); ?>index.php/Artist/update_data/<?php echo $row->Art_Id; ?>" class="btn btn-success">Edit</a></td>
             </tr> 
         
         <?php 
        }
      }
      else{
      ?>
          <tr>
              <td colspan="7">No Data Found</td>
          </tr>

      <?php
      }
    ?>

  </table>
</div>

<script>
  
    $(document).ready(function(){
        $('.delete_data').click(function(){
           var Art_Id = $(this).attr("Art_Id");
           if(confirm("Are you sure you want to delete this?")){
                window.location="<?php echo base_url(); ?>index.php/Artist/delete_data/"+Art_Id;
           }
           else{
                return false;
           }   
        });
    });
</script>      

<?php include 'headfoot/footer.php' ?>
