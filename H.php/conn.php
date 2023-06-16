<?php

$server="localhost";
$username="root";
$pass="";
$con=mysqli_connect($server,$username,$pass);
if(!con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo " connection cvreated successfully";
}


?>