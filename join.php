<?php 
$con = mysqli_connect("localhost","root","","student info");
if ( $con) {
    echo "connected successfully";
    echo"<br>";
}
else{
    die("connection failed". mysqli_connect_error());
}

$result = mysqli_query($con,"select*from studentdata");
echo"studentdata table data:<br>";
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
echo"course table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - studid: ".$row["studid"]." - semester: ".$row["semester"]."-cousename:".$row["coursename"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select*from enrollment");
echo "enrollment table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - studid: ".$row["studid"]." -enrollmentid : ".$row["enrollmentid"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select course.rollno,course.studid,course.coursename,enrollment.enrollmentid from course inner join enrollment on course.rollno=enrollment.rollno");
echo" Inner Join of course and enrollment table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - studid: ".$row["studid"]." -cousename:".$row["coursename"]." - enrollmentid : ".$row["enrollmentid"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select studentdata.rollno,studentdata.firstname,enrollment.enrollmentid from studentdata left join enrollment on studentdata.rollno=enrollment.rollno");
echo " Left Join of studentdata and enrollment table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - firstname: ".$row["firstname"]." -enrollmentid : ".$row["enrollmentid"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select studentdata.rollno,studentdata.firstname,course.coursename from studentdata right join course on studentdata.rollno=course.rollno");
echo " Right Join of studentdata and course table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - firstname: ".$row["firstname"]." -cousename:".$row["coursename"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
$result = mysqli_query($con,"select studentdata.rollno,studentdata.firstname,course.coursename from studentdata full outer join course on studentdata.rollno=course.rollno");
echo " Full Outer Join of studentdata and course table data:<br>";
if (mysqli_num_rows($result )) {
    while($row = mysqli_fetch_assoc($result)){
        echo "rollno: ".$row["rollno"]." - firstname: ".$row["firstname"]." -cousename:".$row["coursename"]."<br>";
    }
    echo "<br>";
}
else{  
    echo "0 results";
}
mysqli_close($con);
?>