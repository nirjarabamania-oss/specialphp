<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$table="CREATE TABLE studentdata(
    rollno INT(6) PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    birthdate DATE,
    )";
    $result=mysqli_query($con,$table);
    if (!$result){
        die("table not created". mysqli_error($con));
    }
    else{
        echo "table created successfully";
    }
    mysqli_close($con);
    ?>
