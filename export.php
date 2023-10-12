<?php
include 'connect.php';
$con = conection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data" >
        <input type="submit" value="export">
    </form>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>number</th>
        </tr>
            <?php
            $select = "SELECT * FROM STUDENT";
            $result = mysqli_query($con,$select);
            foreach($result as $row)
            {
                ?>
                <tr>
                     <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <td><?php echo $row['number'];?></td>
                </tr>
                <?php
                
            }
            ?>
    </table>
</body>
</html>