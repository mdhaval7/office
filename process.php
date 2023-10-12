<?php
include 'connect.php';
$con = conection();
$filename = $_FILES['import']['tmp_name'];
$file = fopen($filename,"r");
// print_r(fgetcsv($file));
while(($getdata = fgetcsv($file)) !== false)
{
    $insert = "INSERT INTO STUDENT(`name`,`email`,`number`)values('$getdata[0]','$getdata[1]','$getdata[2]')";
    $result = mysqli_query($con,$insert);
}
?>