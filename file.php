<?php
require 'connect.php';
$con = conection();
header('content-Type: text/csv');
header('Content-Disposition: attachment; filename=dwonlod.csv');
 $output = fopen("php://output","w");
//  this for table heading
 fputcsv($output,array('name','email','number'));
//  this for table data
$select = "SELECT * FROM STUDENT";
$result = mysqli_query($con,$select);
while($row = mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}

?>