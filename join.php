<?php 
$con = mysqli_connect("localhost","root","","student info  ");
if ( $con) {
    echo "connected successfully";
}
else{
    die("connection failed". mysqli_connect_error());
}

$result = mysqli_query($con,"select*from studentdata");
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - Name: ".$row["firstname"]." ".$row["lastname"]." - birthdate: ".$row["birthdate"]."<br>";
    }
    echo"<br>";
}
else{
    echo "0 results";
}
$result = mysqli_query($con,"select*from course");
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - studentid: ".$row["studentid"]." - semester: ".$row["semester"]."-cousename:".$row["coursename"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select*from enrollment");
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - studid: ".$row["studid"]." -enrollmentid : ".$row["enrollmentid"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}

mysqli_close($con);
?>