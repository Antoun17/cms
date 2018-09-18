$link = mysqli_connect("localhost", "admin", "cmsnyc123", "cms");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
