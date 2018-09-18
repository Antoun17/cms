<?php

$link = mysqli_connect("localhost", "admin", "cmsnyc123", "cms");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE inventory t1, distribution t2 SET t1.status = t2.status WHERE t1.serial_number = t2.serial_number";

if(mysqli_query($link, $sql)){
    echo "Updated Inventory.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
