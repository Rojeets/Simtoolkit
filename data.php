<?php
require_once('header.php');
$number = $_SESSION['number'];
$sql="SELECT * from user where number='$number'";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($result)){

    if($row['data'] === 0){
       echo" <p>Your haven't subscribed any data packages. </p>";
    }else 
    {
        echo "<p>You have ".$row['data']. "mb left<?/p.>";
    }

?>
<p> Available data packs: <br>
    1. 150mb  ----- Rs. 25 <br>
    2. 250mb  ----- Rs. 30 <br>
    3. 500mb  ----- Rs. 50 <br>
    4. 750mb  ----- Rs. 75 <br>
    5. 1024mb  ----- Rs. 100</p><br><br>
    <form action="" method="GET">
        Enter your choice:
        <input type="number" name="add" placeholder="choice" >
        <button name="choice" type="submit">Buy</button>
</form>


<?php

if(isset($_GET['choice'])){
    switch($_GET['add']){
            case 1:
                $paisa = $row['balance'] - 25;
                $data=$row['data'] + 150;
            break;
            case 2:
                $paisa=$row['balance'] - 30;
                $data=$row['data'] + 250;
            break;
            case 3:
                $paisa=$row['balance'] - 50;
                $data=$row['data'] + 500;
            break;
            case 4:
                $paisa=$row['balance'] - 75;
                $data=$row['data'] + 750;
            break;
            case 5:
                $paisa=$row['balance'] - 100;
                $data=$row['data'] + 1024;
            break;
            default:
            echo "Wrong choice";
    }
    $ADD="UPDATE user SET balance = '$paisa' ,data = '$data' WHERE number = '$number'";
    mysqli_query($connect, $ADD);

echo "Your new balance is".$row['balance']."And you have ".$row['data']."left.";

header("location: home.php");
}

}
require_once('footer.php');
?>