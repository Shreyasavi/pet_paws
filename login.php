<?php
session_start();//session starts here

?>

<?php

$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"pet_store_db");

if(isset($_POST['checkin']))
{
    $eid=$_POST['eid'];
    $ename=$_POST['ename'];

    $check_user="select * from employee WHERE e_id='$eid'AND e_name='$ename'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('Pages/dashboard.php','_self')</script>";

        $_SESSION['eid']=$eid;//here session is used and value of $eid store in $_SESSION.

    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("EID or Employee name is incorrect!");';
        echo 'window.location.href="Pages/dashboard.php";';
        echo '</script>';

    }
}
?>
