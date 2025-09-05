<?php
$con = mysqli_connect("localhost","root","","student info");
if($con){
    echo "connected successfully";
}
else{
    die("connection failed". mysqli_connect_error());
}
$result = mysqli_query($con,"select fristname,lastname ,rollno from studentdata where fristname like 'n%' group by rollno");
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