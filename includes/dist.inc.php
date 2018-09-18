<?php

$link = mysqli_connect("localhost", "admin", "cmsnyc123", "cms");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$serial_number = mysqli_real_escape_string($link, $_REQUEST['serial_number']);
$student_name = mysqli_real_escape_string($link, $_REQUEST['student_name']);
$student_osis = mysqli_real_escape_string($link, $_REQUEST['student_osis']);
$student_email = mysqli_real_escape_string($link, $_REQUEST['student_email']);
$chromebook_brand = mysqli_real_escape_string($link, $_REQUEST['chromebook_brand']);
$asset_tag = mysqli_real_escape_string($link, $_REQUEST['asset_tag']);
$distribution_date = mysqli_real_escape_string($link, $_REQUEST['distribution_date']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);

$status = $_POST['chromebookstatus'];
$chromebook_brand = $_POST['chromebookbrand'];

$sql = "INSERT INTO `distribution` (serial_number, student_name, student_osis, student_email, chromebook_brand, asset_tag, distribution_date, status) VALUES ('$serial_number', '$student_name', '$student_osis', '$student_email','$chromebook_brand','$asset_tag','$distribution_date', '$status')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<button onclick="history.go(-1);">Back </button>

</body>
</html>
