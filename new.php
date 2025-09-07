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
$result = mysqli_query($con,"update studentdata set enrollmentid=1 where rollno=1");
if (!$result){
    die("table not updated". mysqli_error($con));
}
else{
    echo "table altered successfully";
}
mysqli_close($con);
?>