<?php
include "connection.php";
extract($_GET);
$query="DELETE from userinfo where id='$id'";
mysqli_query($con, $query);
header('location:display.php');
?>
