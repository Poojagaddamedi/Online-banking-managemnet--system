<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //echo "hello"."<br>";
    $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'std_db'
    );

    if(!$conn){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
    }
    //else
    //echo " conection established ";

    ?>
    </body>
    </html>