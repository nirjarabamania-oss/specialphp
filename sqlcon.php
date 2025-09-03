<?php
$con = mysqli_connect("localhost","root","","student info");
if(!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$table="create table course(
    rollno INT(6),FOREIGN KEY (rollno) REFERENCES studentdata(rollno),
    studid INT(6) PRIMARY KEY,
    semester INT (6) NOT NULL,
    coursename VARCHAR(30) NOT NULL)";
    $result=mysqli_query($con,$table);
   if (!$result){
       die("table not created". mysqli_error( $con));
   }
   else{
       echo "table created successfully";
   }
    mysqli_close( $con);
    ?>