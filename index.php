<?php
require_once('connection.php');

if(isset($_POST['login'])){
    $number = $_POST['number'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `number`='$number' AND `password`='$password'";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($result);
    
    if($count == 0){
        echo "<footer>Invalid Username / Password.</footer>";
    } else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['number'] = $row['number'];
        header("location:home.php");
          }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STK_LOGIN</title>
    <link rel="stylesheet" href=".css">
</head>
<body><div class="body">
    <div class="login">
        <h3 class="welcome">Welcome TO <br>SIM Toolkit(STK)</h3>
        <form method="POST">
            <input type="number" placeholder="Number" name="number"><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button class="button3"type="submit" name="login">Login</button>
        </form>
       <h6><a class="button1" href="create.php">Register?</a></h6>
    </div>
    </div>
<?php
require_once('footer.php');
?>
