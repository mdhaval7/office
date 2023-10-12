<?php
function conection()
{
    $con = mysqli_connect('localhost','root','','php');
    if(!$con)
    {
        echo "not connect";
    }
    return $con;
}
?>