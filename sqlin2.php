<?php
$con = mysqli_connect("localhost","root","","student info");
if(!$con) {
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$result = mysqli_query($con,"INSERT INTO course (rollno, studid, semester, coursename) VALUES (1, 101, 1, 'php'),(2,102,2,'java'),(3,103,1,'python')");
if(!$result) {
    die("data not inserted". mysqli_error($con));
}
else{
    echo "data inserted successfully";
}
mysqli_close($con);
?>