<?php

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

if (isset($_REQUEST['sign'])) {
    $signing = $_REQUEST['sign'];
    switch ($signing) {
        case "testimonial":
        testimonial();
            break;
        default:
            break;
    }
}


function testimonial() {
  $id = 101;
  $sel_year = 'allyrs';
  $sel_semester = 1;
  $transcript_ui = "";
  $no_content  = "<div class='jumbotron'>No content found!</div>";
  $no_results  = "<div class='jumbotron'>No Results found!</div>";
  $con         = con();
  $get_details = mysqli_query($con, "SELECT * FROM student WHERE id='$id'");
  if (!$get_details) {
      echo "no" . mysqli_error($con);
  }
  $count_them = mysqli_num_rows($get_details);
  
  if ($count_them < 1) {
      echo $no_content;
      mysqli_close($con);
      return;
  }
  $student_details   = mysqli_fetch_array($get_details);
  $name              = strtoupper($student_details['surname']) . " " . $student_details['firstName'];
  $gender            = $student_details['gender'];
  $regNo             = $student_details['regNo'];
  $prog_id           = $student_details['program'];
  $academicyearEntry = $student_details['academicyearEntry'];
  $get_program       = mysqli_query($con, "SELECT * FROM programme WHERE programmeID='$prog_id'");
  if (!$get_program) {
      echo 'no' . $get_program;
  }
  $get_program_name = mysqli_fetch_array($get_program);
  $prog_name        = $get_program_name['name'];
  
  $dob                = $student_details['dob'];
  $date_of_completion = $student_details['dateofcompletion'];
  $nationality        = $student_details['nationality'];
  $pic_url            = '../dist/img/user-avatar.png';
  
  $transcript_title       = "STUDENT RESULTS";
  $transcript_heading     = "Student Details";
  $caption_name           = "NAME";
  $caption_reg_no         = "REG. NO";
  $caption_dob            = "DOB";
  $caption_gender         = "GENDER";
  $caption_intake         = "INTAKE";
  $caption_program        = "PROGRAMME";
  $caption_course_code    = "COURSE CODE";
  $caption_course_name    = "COURSE NAME";
  $caption_cu             = "CU";
  $caption_gp             = "GP";
  $caption_grade          = "GRADE";
  $caption_award          = "Award";
  $caption_class_of_award = "Class of Award";
  
  $transcript_ui .= "
  <html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='shortcut icon' href='../dist/img/ico.png' type=''>
    <title>
    </title>
    <head>
    <link rel='stylesheet' href='../bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../bower_components/font-awesome/css/font-awesome.min.css'>
    </head>
      <div class='col-lg-12 text-center'>
          <b>$transcript_title</b>
          <div class='center-div'>
              <img src='$pic_url' class='img-thumbnail' width='100px'/>
          </div>
          <br/>
          <div class='panel panel-primary'>
              <div class='panel-heading' style='padding:0px;'>
                  $transcript_heading
              </div>
              <div class='panel-body text-left'>
              <div class='col-md-12'>
                  <div class='col-md-6 transcript-info ' style='padding:0px;'>
                      <div><b>$caption_name:</b> &nbsp; $name </div>
                      <div><b>$caption_reg_no:</b> &nbsp; $regNo </div>
                      <div><b>$caption_dob:</b> &nbsp; $dob </div>
                      <div><b>$caption_gender:</b> &nbsp; $gender </div>
                      <div><b>$caption_intake:</b> &nbsp; $academicyearEntry </div>
                      <div><b>$caption_program:</b> &nbsp; $prog_name </div>
                  </div>
              
                  </div>
              </div>
          </div>
      </div> 
  ";
  if (marksExists_Student($id) == true) {
      if ($sel_year == "allyrs") {
          $get_years = mysqli_query($con, "SELECT yearOfOffering FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id'  GROUP BY yearOfOffering ORDER BY yearOfOffering");
      } else {
          $get_years = mysqli_query($con, "SELECT yearOfOffering FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id' AND yearOfOffering = '$sel_year' GROUP BY yearOfOffering ORDER BY yearOfOffering");
      }
      $count         = 0;
      $total_gp_cu   = 0;
      $total_cu      = 0;
     
      
      while ($years = mysqli_fetch_array($get_years)) {
          $year_of_offering = getYearName($years['yearOfOffering']);
          $yrno             = $years['yearOfOffering'];
          if ($sel_year == "allyrs") {
              $sems = mysqli_query($con, "SELECT semester FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id'  GROUP BY semester ORDER BY yearOfOffering");
          } else {
              $sems = mysqli_query($con, "SELECT semester FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id' AND semester = '$sel_semester' GROUP BY semester ORDER BY yearOfOffering");
              
          }
          while ($get_semester = mysqli_fetch_array($sems)) {
              $semester         = $get_semester['semester'];
              $semester_caption = getSemesterName($semester);
              $transcript_ui .= "
              <div class='col-md-12'>
                  <div class='panel panel-primary'>
                      <div class='panel-heading' style='padding:0px;'>
                          $year_of_offering &nbsp; $semester_caption
                      </div>
                      <div class='panel-body table-scrollable'>
                          <table class='table table-striped margin-negative-10 display'>
                              <tr style='padding:0px;' >
                                  <th> $caption_course_code </th>
                                  <th> $caption_course_name </th>
                                  <th> $caption_cu </th>
                                  <th> $caption_gp </th>
                                  <th> $caption_grade </th>
                              </tr>";
              $get_results = mysqli_query($con, "SELECT c.courseunitCode,c.name,c.creditUnits,m.mark,m.grade FROM marks m JOIN courseunit c ON  m.courseunit_courseunitID = c.courseunitID WHERE m.student_studentID='$id' AND m.courseunit_programme_programmeID ='$prog_id' AND m.yearOfOffering='$yrno' AND m.semester='$semester' ORDER BY c.courseunitCode");
              if (!$get_results) {
                  echo 'no' . mysqli_error($con);
              }
              while ($student_results = mysqli_fetch_array($get_results)) {
                  $course_unit_code = $student_results['courseunitCode'];
                  $course_unit_name = $student_results['name'];
                  $grade            = $student_results['grade'];
                  $cu               = $student_results['creditUnits'];
                  
                  // echo "grade:".$grade."<br>" ;
                  $query = "SELECT * FROM grading WHERE grade = '" . $grade . "'";
                  
                  $query_run = mysqli_query($con, $query);
                  if (!$query_run) {
                      echo "no" . mysqli_error($con);
                  }
                  $row = mysqli_fetch_array($query_run);
                  $gp  = $row['gp'];
                  
                  
                  
                  
                  // echo "gp:".$gp."<br>" ;
                  
                  //echo "cu:".$cu."<br>" ;
                  // echo "total_cu----------".$total_cu;
                  $mark = $student_results['mark'];
                  
                  $total_gp_cu += $gp * $cu;
                  $total_cu += $cu;
                  $transcript_ui .= "
              <tr style='padding:0px;'>
                  <td> $course_unit_code </td>
                  <td> $course_unit_name </td>
                  <td> $cu </td>
                  <td> $gp </td>
                  <td> $grade </td>
              </tr>";
              }
              // echo "total_gp_cu-------".$total_gp_cu."<br>";
              //echo "total_cu----------".$total_cu."<br>";
              //echo "gpa----------".number_format($total_gp_cu / $total_cu, 2)."<br>";
              if ($total_cu > 0)
                  $gpa = number_format($total_gp_cu / $total_cu, 2);
              $count += 1;
              if ($count == 1) {
                  $gpa_caption = "G.P.A";
              } else {
                  $gpa_caption = "C.G.P.A";
              }
              $transcript_ui .= "
                  <tr>
                      <td colspan='2'><b><i> </i></b></td>
                      <td colspan='3'><b><i> $gpa_caption &nbsp; $gpa </i></b></td>
                  </tr>
              </table>
          </div>
          </div>
          </div>";
          }
      }
      $award_name     = getAwardName($prog_name);
      $class_of_award = getAward($gpa);
      $transcript_ui .= "
      <div class='col-lg-12'>
          <div class='panel panel-default'>
              <div class='panel-body'>
                  <p><b>$caption_award: </b> $award_name</p>
                  <p><b>$caption_class_of_award:</b> $class_of_award</p>
              </div>
          </div>
      </div>
  </div>
  ";
      GeneratePDF($transcript_ui);
  } else {
      GeneratePDF('<b>yes</b>');
      mysqli_close($con);
  }
    
}



/////dompdf/////////////////

function GeneratePDF($data) {
    $dompdf = new Dompdf();
    $dompdf->loadHtml($data);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();


    $dompdf->stream('codesxworld', array('Attachment' => 0));
}
    function GeneratePDF_1($data) {
    $dompdf = new Dompdf();
    $dompdf->loadHtml($data);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();


    $dompdf->stream('codesxworld', array('Attachment' => 0));
}

function con() {
  $mysqli = new mysqli("localhost", "root", "", "schoolstuff");
  return $mysqli;
}
function marksExists_Student($stdid){
  $mysqli    = con();
  $query     = "SELECT * FROM marks WHERE student_studentID = '" . $stdid . "'";
  $query_run = mysqli_query($mysqli, $query);
  $num       = mysqli_num_rows($query_run);
  if ($num == 0) {
      return false;
  } else {
      return true;
  }
}
function getSemesterName($semester){
  $sem_name = "";
  if ($semester == "1") {
      $sem_name = "Semester I";
  } else if ($semester == "2") {
      $sem_name = "Semester II";
  }
  return $sem_name;
}
function getYearName($year){
  $year_name = "";
  if ($year == "1") {
      $year_name = "Year 1";
  } else if ($year == "2") {
      $year_name = "Year 2";
  } else if ($year == "3") {
      $year_name = "Year 3";
  } else if ($year == "4") {
      $year_name = "Year 4";
  } else if ($year == "5") {
      $year_name = "Year 5";
  }
  return $year_name;
}
function getAwardName($program){
  $name = "DIPLOMA IN " . $program;
  return $name;
}

function getAward($cgpa){
  if ($cgpa >= 4.5) {
      $award = "Class I (Distinction)";
  } else if ($cgpa >= 3.5) {
      $award = "Class II (Credit)";
  } else if ($cgpa >= 2) {
      $award = "Class III (Pass)";
  } else {
      $award = "Fail";
  }
  return $award;
}
function getGP($grade){
  $strvar = settype($grade, 'string');
  $mysqli    = con();
  $query     = "SELECT * FROM grading WHERE grade = '" . $strvar . "'";
  $query_run = mysqli_query($mysqli, $query);
  if (!$query_run) {
      echo "Query Run Error" . mysqli_error($mysqli);
  } else {
      $row = mysqli_fetch_array($query_run);
      $gp  = $row['gp'];
      return $gp;
  }
}
?>