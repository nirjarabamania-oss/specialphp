<?php
$con = mysqli_connect("localhost","root","","student info");
if(!$con){
    die("mysql error". mysqli_connect_error());
}
else{
    echo"connected succesfully";
    echo"<br>";
}
$result = mysqli_query($con,"SELECT rollno, lastname
FROM Studentdata 
ORDER BY rollno 
LIMIT 3;");
if(!$result){
    die("query error". mysqli_error($con));
}
else{
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno".$row["rollno"] ."lastname".$row["lastname"];
        echo"<br>";
    }
}
mysqli_close($con);
?>