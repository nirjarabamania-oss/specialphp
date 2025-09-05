<?php
$con = mysqli_connect("localhost","root","","student info");
if ( $con) {
    echo "connected successfully";
    echo"<br>";
}
else{
    die("connection failed". mysqli_connect_error());
}
$result=mysqli_query($con,"create index stud on studentdata(rollno)");
if ($result) {
    echo "index created successfully";
}
else{
    die("index not created". mysqli_error($con));
}
$result=mysqli_query($con,"select fristname,lastname ,rollno from studentdata where name like 'n%' group by rollno"); 
if ($result) {
    echo "query executed successfully";
    echo"<br>";
    while($row=mysqli_fetch_assoc($result)){
        echo "fristname:".$row['fristname']." lastname:".$row['lastname']." rollno:".$row['rollno'];
        echo"<br>";
    }
}
else{
    die("query not executed". mysqli_error($con));
}
mysqli_close($con);
?>