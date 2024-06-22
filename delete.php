<?php
require_once('header.php');
$number=$_SESSION['number'];

?>
<h3>Do you really want to erase all your data ?</h3>
<form action=""method="GET">
    <button class="button2" name="yes" type="submit">Yes</button>
    <button class="button1" name="no" type="submit">No</button>
</form>
<?php
if(isset($_GET['yes'])){
    $delete="DELETE FROM user WHERE number='$number'";
    mysqli_query($connect ,$delete);
    header("location: index.php");
}elseif(isset($_GET['no'])){
    header("location: home.php");
}
require_once('footer.php');
?>