<?php
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=".css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
</head>
<body>
<h3>!! For registration please fulfill the below form !!</h3>
<div class="create" >
<form  action="" method="POST" >
    <br><br>
    <br><input type="text" name="name" id="" placeholder="Name">
    <br><input type="number" name="number" id="" placeholder="Number">
    <br><input type="password" name="password" id="" placeholder="Password"></td>
<br>
    <br><button type="submit" name="submit" class="button1">Submit</button>
    <button class="button2" type="reset">Reset</button>
    <br><button type="submit" name="cancel" class="button2">Cancel</button>
</form>
</div>
<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    if(strlen($name)=== 0 || strlen($number)=== 0 ){
        echo "<h3> please enter your details</h3>";
    }else{
    $sql="INSERT INTO user (Name, number, balance, data, password) VALUES('$name','$number',0,0,'$password')";
    mysqli_query($connect, $sql);
    header("location: index.php");
    }
}
elseif(isset($_POST['cancel'])){
    header("location: index.php");
}
require_once('footer.php');
?>