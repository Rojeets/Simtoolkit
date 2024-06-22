<?php
require_once('header.php');
$number=$_SESSION['number'];
$sql= "SELECT * FROM user WHERE number='$number'";
$result=mysqli_query($connect,$sql);
while($row = mysqli_fetch_assoc($result)) {
    
?>
 <p>
    Registered To: <?php echo $row['Name']?> <br><br>
    Registered By: <?php echo $row['number']?>
     <br><br>
    Balance: Rs.<?php echo $row['balance']?> <br><br>
    Data: <?php echo $row['data']?>mb <br><br>
    Password: <?php echo $row['password']?> <br><br>
         </p>
<?php
    }
    require_once('footer.php');
?>
