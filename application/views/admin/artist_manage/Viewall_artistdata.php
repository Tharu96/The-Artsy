
<body  background = "<?php echo base_url('images/Art-Galleries-in-karachi.jpg')?>" background-size: 100% 100% >
<div > 
	<br><br><br><br><br><br><br><br>
      <table class="table table-dark">
            <tr style="background:#CCC">
              <th>id No</th>
              <th>frist Name</th>
              <th>second name</th>
              <th>NIC</th>
              <th>email</th>
              <th>address</th>
              <th>gender</th>
              <th>bank accout no</th>
              <th><a href='http://localhost/radp/index.php/Artist_manage_C/to_insert' class="btn btn-warning ">add artist</a></th>

            </tr>
            <?php 
            // get all the data from the controller and show the details as a table 
            //for every details of the person there is are two buttons to update and delete 
        
            foreach($data as $row)
            {
            $S= $row->id;
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->firstname."</td>";
            echo "<td>".$row->secondname."</td>";
            echo "<td>".$row->nic."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->address."</td>";
            echo "<td>".$row->gender."</td>";
            echo "<td>".$row->BAN."</td>";
            echo "<td> <a href='http://localhost/radp/index.php/Artist_manage_C/delete/$S'   class='btn btn-primary'  >Delete </a> </td>";
            echo "<td> <a href='http://localhost/radp/index.php/Artist_manage_C/viewperson/$S' class='btn btn-warning '>update</a> </td>";
            
            echo "</tr>";

          }
        ?>
      </table>

                                    
</div>
</body>
</html>
