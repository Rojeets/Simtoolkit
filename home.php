<?php
 require_once ('header.php');
 ?>
    <div class="contact">
      <h3>Contacts</h3>
      <table id="customers">
       <tr>
          <th>Name</th> 
          <th>Number</th>
       </tr>
         <?php 

           $sql="SELECT Name , number FROM user ORDER BY id ASC limit 100";
           $result=mysqli_query($connect,$sql);
           while($row = mysqli_fetch_assoc($result)) {
            if($row['number']!= $_SESSION['number']){
         ?>
      <tr>
         <td><?php  echo $row['Name'];?></td>
         <td><?php echo $row['number'];?></td>
      </tr>
   </div>
<?php
   }
}
?>
   </table>
<?php
 require_once('footer.php');
 ?>