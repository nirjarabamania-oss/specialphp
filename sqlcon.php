<?php
$con = mysqli_connect("localhost","root","","student info");
if(!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$result = mysqli_query($con,"create table course(
    rollno INT(6) foreign key references studentdata(rollno),
    courseid INT(6) PRIMARY KEY,
    semester INT(6) NOT NULL,
    cousename VARCHAR(30) NOT NULL)");
   if (!$result){
       die("table not created". mysqli_error( $con));
   }
   else{
       echo "table created successfully";
   }
    mysqli_close( $con);
    ?>