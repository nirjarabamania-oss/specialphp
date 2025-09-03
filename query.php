<?php
$con = mysqli_connect("localhost","root","","student info");
if($con){
    echo "connected successfully";
}
else{
    die("connection failed". mysqli_connect_error());
}
$table="update studentdata set firstname='nirjara b' where rollno=1";
$result = mysqli_query($con,$table);
if($result){
    echo "data updated successfully";
}
else{
    die("data not updated". mysqli_error($con));
}
$selest="select * from studentdata";
$sql = mysqli_query($con,$selest);
if (mysqli_num_rows($sql )){
    while($row = mysqli_fetch_assoc($sql)){
        echo "rollno: ".$row["rollno"]." - Name: ".$row["firstname"]." ".$row["lastname"]." - birthdate: ".$row["birthdate"]."<br>";
    }
}
else{
    echo "0 results";
}
$like_query = "SELECT * FROM studentdata WHERE firstname LIKE 'n%'";
$like = mysqli_query($con, $like_query);
if(mysqli_num_rows($like))    {
    while($row = mysqli_fetch_assoc($like)){
        echo "rollno: ".$row["rollno"]." - Name: ".$row["firstname"]." ".$row["lastname"]." - birthdate: ".$row["birthdate"]."<br>";
    }
}
else{
    echo "0 results";
}

mysqli_close($con);
?>