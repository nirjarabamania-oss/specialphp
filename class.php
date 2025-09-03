<?php
class studinfo {
  public $student_name ;
  public $student_course;
  function insertname($name){
    $this->student_name=$name;
}
 function insertcourse($course){
   $this->student_course=$course;
 }
  function view(){
    echo "student name is "." $this->student_name" ;
    echo "student course is "."$this->student_course";
  }
}
$info1=new studinfo();
$info1->insertname("nirjara");
$info1->insertcourse("bsc");
$info1->view();
?>
