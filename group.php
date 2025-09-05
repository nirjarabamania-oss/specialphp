<?php
$con = mysqli_connect("localhost","root","","student info");
if($con){
    echo "connected successfully";
}
else{
    die("connection failed". mysqli_connect_error());
}
$result = mysqli_query($con, "SELECT rollno, coursename, studid FROM course GROUP BY rollno");
if(mysqli_num_rows($result) == 0){ 
    echo "no records found";
}
else{
    while($row = mysqli_fetch_assoc($result)){ 
        echo "rollno".$row["rollno"]."coursname".$row["coursename"]."studid".$row["studid"];
    }
}
mysqli_close($con); 
?>