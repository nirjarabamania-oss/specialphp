<?php
$con = mysqli_connect("localhost","root","","student info");
if($con){
    echo "connected successfully";
}
else{
    die("connection failed". mysqli_connect_error());
}
$result = mysqli_query($con, "SELECT fristname, lastname, rollno FROM studentdata GROUP BY rollno");
if(mysqli_num_rows($result) == 0){ 
    echo "no records found";
}
else{
    while($row = mysqli_fetch_assoc($result)){
        echo "fristname: ".$row["fristname"]." - lastname: ".$row["lastname"]." - rollno: ".$row["rollno"]."<br>";
    }
}
mysqli_close($con); 
?>