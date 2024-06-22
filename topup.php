<?php
require_once('header.php');
$number = $_SESSION['number'];
$sql="SELECT * from user where number='$number'";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($result)){
?>
<p>Your recent balance is Rs.<?php echo $row['balance'];?></p>
<form action="" method="GET">
    <input type="number" name="add" placeholder="Amount" >
    <button name="topup" type="submit">Top-up</button>
</form>


<?php

if(isset($_GET['topup'])){
    $paisa = $row['balance'] + $_GET['add'];
    $ADD="UPDATE user SET balance = '$paisa' WHERE number = '$number'";
    mysqli_query($connect, $ADD);

echo "Your new balance is".$row['balance'];

header("location: home.php");
}
}
require_once('footer.php');
?>