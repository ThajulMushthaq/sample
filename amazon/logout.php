<?php
session_start ();
session_destroy();
echo "<script> window.confirm('Are you sure to logout?');window.location='login.php'</script>";
// header("location:login.php");
?>