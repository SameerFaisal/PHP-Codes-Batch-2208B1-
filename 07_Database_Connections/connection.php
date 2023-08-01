<?php
$connection = mysqli_connect("localhost", "root", "", "demo");
if($connection){
    echo "connected";
}
else{
    die("connection failed" or mysqli_connect_error());
}

?>