<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}

$result = mysqli_query($con,"INSERT INTO studentdata (rollno, firstname, lastname, birthdate) VALUES (1, 'nirjara', 'bamania', '2007-01-01'),(2,'priyal','ranpariya','2009-05-05'),(3,'nandini','dhayani','2004-09-09')");
if (!$result){
    die("data not inserted". mysqli_error($con));
}
else{
    echo "data inserted successfully";
}
mysqli_close($con);
?>