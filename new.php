<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$result = mysqli_query($con,"alter table studentdata add column enrollmentid int(6), foreign key (enrollmentid)refrence enrollment(enrollmentid)");
if (!$result){
    die("table not altered". mysqli_error($con));
}
else{
    echo "table altered successfully";
}
mysqli_close($con);
?>