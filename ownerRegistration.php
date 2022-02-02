<?php

$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"pet_store_db");

if(isset($_POST['oregister']))
{
    $oname=$_POST['oname'];//same
    $password=$_POST['password'];
    $olocation=$_POST['olocation'];
    $ocontact=$_POST['ocontact'];
    $pname=$_POST['pname'];
    $breed=$_POST['breed'];//same


//insert the user into the database.
    $insert_user="insert into owner (o_name,password, o_location,o_contact) VALUE ('$oname','$password','$olocation','$ocontact')";
    $insert_pet= "insert into pet (p_name, breed) VALUE ('$pname','$breed')";
    echo '<script language="javascript">';
    echo 'alert("User registered!");';
    echo 'window.location.href="Pages/home.php";';
    echo '</script>';
    mysqli_query($dbcon,$insert_pet);
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('Pages/home.php','_self')</script>";
    }
}
?>
