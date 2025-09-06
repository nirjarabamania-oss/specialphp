<?php
$con = mysqli_connect("localhost","root","","student info");
if(!$con) {
    die("mysql error". mysqli_connect_error());
}
else {
    echo"connected succesfully";
    echo"<br>";
}
$result = mysqli_query($con,"select * from studentdata");
if(!$result) {
    die("mysql error". mysqli_connect_error());
}
else {
    while($row = mysqli_fetch_array($result)) {
        echo "rollno: ".$row["rollno"]." - Name: ".$row["firstname"]." ".$row["lastname"]." - birthdate: ".$row["birthdate"]."<br>";
    }
}
mysqli_close($con);
?>