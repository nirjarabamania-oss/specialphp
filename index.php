<?php
$con = mysqli_connect("localhost","root","","student info");
if ( $con) {
    echo "connected successfully";
    echo"<br>";
}
else{
    die("connection failed". mysqli_connect_error());
}
$result = mysqli_query($con, "CREATE INDEX Quik ON studentdata(rollno)");
if ($result) {
    echo "index created successfully";
}
else {
    die("index not created". mysqli_error($con));
}
?>