<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
    echo"<br>";
}
# $result = mysqli_query($con, "ALTER TABLE studentdata ADD COLUMN enrollmentid INT(6), ADD CONSTRAINT fk_enrollmentid FOREIGN KEY (enrollmentid) REFERENCES enrollment(enrollmentid)");
#$result = mysqli_query($con,"update studentdata set enrollmentid=2 where rollno=2");
$result = mysqli_query($con,"update studentdata set enrollmentid=3 where rollno=3");
if (!$result){
    die("table not updated". mysqli_error($con));
}
else{
    echo "table updated successfully";
    echo "<br>";
}
$result = mysqli_query($con,"select * from studentdata");
if (!$result){
    die("table not selected". mysqli_error($con));
}
else{
    while($row = mysqli_fetch_array($result)) {
        echo "rollno: ".$row["rollno"]." - Name: ".$row["firstname"]." ".$row["lastname"]." - birthdate: ".$row["birthdate"]." - enrollmentid: ".$row["enrollmentid"]."<br>";
    }
}
$result = mysqli_query($con,"insert into studentdata (rollno,firstname,lastname,birthdate,enrollmentid) values (4,'Ankita','Shah','2003-05-12',1),(5,'Riya','Patel','2002-11-23',2)");
if (!$result){
    die("data not inserted". mysqli_error($con));
}
else{
    echo "data inserted successfully";
    echo "<br>";
}
mysqli_close($con);
?>