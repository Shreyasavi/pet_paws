<?php
session_start();//session starts here

?>

<?php

$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"pet_store_db");

if(isset($_POST['ologin']))
{
    $oname=$_POST['oname'];
    $password=$_POST['password'];

    $check_user="select * from owner WHERE o_name='$oname' AND password='$password'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('Pages/home.php','_self')</script>";

        $_SESSION['oname']=$oname;//here session is used and value of $eid store in $_SESSION.

    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Name or Password is incorrect!");';
        echo 'window.location.href="index.php";';
        echo '</script>';

    }
}
?>
