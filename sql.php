<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$table="create table studentdata(
    rollno INT(6) PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    birthdate DATE )";
 $result=mysqli_query(mysql: $con,query: $table);
    if (!$result){
        die("table not created". mysqli_error(mysql: $con));
    }
    else{
        echo "table created successfully";
    }
    mysqli_close(mysql: $con);
    ?>
