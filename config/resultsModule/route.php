<?php


  include "view.php";
  include "crud.php";

if (isset($_REQUEST['call'])){
  $signing = base64_decode($_REQUEST['call']);
  switch($signing){
    case "entermarks":
      entermarks();
      break;

    case "getCourseunits":                //Populate Courseunits <select>
      $Programme = $_REQUEST['Programme'];
      $semester = $_REQUEST['semester'];
      $year = $_REQUEST['year'];
      getCourseunits($Programme,$semester,$year);
    break;

    case "getStudents":                   //Populate Students <select>
      $Programme = $_REQUEST['Programme'];
      $year = $_REQUEST['year'];
      $intake = $_REQUEST['intake'];
      getStudents($Programme,$year,$intake);
    break;

    case "enterNewMark":
      insert_marks();
    break;

    case "getStudent":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    loadTranscript($id,$year,$semester);
    break;

    case "getStudentDetails":
    $id = $_GET['id'];
    getStudent($id);
    break;

    case "GradeStudent":
    $mark = $_REQUEST['mark'];
    GradeStudent($mark);
    break;

    case "singleResult":
    singleResult();
    break;

    case "getAllStudent":
    getAllStudent();
    break;

    case "editsingleresult":
    EditSingleResult();
    break;

    case "bulkentry":
    bulkyEntry();
    break;

    case "edit_getCourseunits":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    edit_getCourseunits($year,$semester,$id);
    break;

    case "bulk_getCourseunits":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    bulk_getCourseunits($year,$semester,$id);
    break;

    case "bulk_loadStudentsMarks":
    $id = $_GET['id'];
    $year = $_GET['year'];
    bulk_loadStudentsMarks($year,$id);
    break;

    case "edit_loadCourseunits":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $courseunit = $_GET['courseunit'];
    edit_loadCourseunits($year,$semester,$id,$courseunit);
    break;

    case "edit_loadCourseunits":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $courseunit = $_GET['courseunit'];
    edit_loadCourseunits($year,$semester,$id,$courseunit);
    break;

    case "updateSingleResult":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $courseunit = $_GET['courseunit'];
    $mark = $_GET['mark'];
    $reason = $_GET['reason'];
    UpdateSingleResult($id,$year,$semester,$courseunitID,$mark,$reason);
    break;
    
  }
}