<?php
$con = mysqli_connect("localhost","root","","student info");
if (!$con){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "connected successfully";
}
$result = mysqli_query($con,"create table enrollment(rollno int(6),foreign key (rollno) references studentdata(rollno),studid int(6),foreign key (studid) references course(studid),enrollmentid int(6) primary key )");
if ($result){
    echo "table created successfully";
}
else{
    die("table not created". mysqli_error($con));
}
$insert=mysqli_query($con,"insert into enrollment (rollno,studid,enrollmentid) values (1,101,1),(2,102,2),(3,103,3)");

if ($insert){   
    echo "data inserted successfully";
}
else{
    die("data not inserted". mysqli_error($con));
}
mysqli_close($con);
?>