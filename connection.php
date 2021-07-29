<?php
$con = mysqli_connect('127.0.0.1:3307', 'root');
if($con){
   // echo "Connection successful";
}else{
   // echo "No connection";
}
mysqli_select_db($con, 'payment');


?>