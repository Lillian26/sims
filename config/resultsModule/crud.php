
<?php

function con(){
    $mysqli = new mysqli("localhost","root","","schoolstuff");
    return $mysqli;
}
function getCourseunits($prog,$semester,$year) {
    $mysqli = con();
    $query = "SELECT * FROM courseunit WHERE programme_programmeID = '" . $prog . "' AND semesterOffered = '" . $semester . "' AND yearOffered = '" . $year . "'";
    $query_run = mysqli_query($mysqli, $query);
    $num = mysqli_num_rows($query_run);
    echo "nummmmmm".$num;
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
        if ($num>0){
                echo "<option selected='selected'>--Select--</option>";
                while ($row = mysqli_fetch_array($query_run)) {
                echo "
                    
                    <option value='".$row['courseunitID']."'>".$row['courseunitCode']."-".$row['name']."</option>
                ";   
            }
        }else{
            echo "<option>No Courseunits </option>";
        }
        
    }
}

function getStudents($Programme,$year,$intake) {
        $mysqli = con();
        $query = "SELECT * FROM student WHERE program = '" . $Programme . "' AND yearOfStudy = '" . $year . "' AND academicyearEntry = '" . $intake . "'";
        $query_run = mysqli_query($mysqli, $query);
        $num = mysqli_num_rows($query_run);
        echo "nummmmmm".$num;
        if (!$query_run) {
            echo "Query Run Error" . mysqli_error($mysqli);
        } else {
            if ($num>0){
                    echo "<option selected='selected' value='no-value'>--Select--</option>";
                    while ($row = mysqli_fetch_array($query_run)) {
                    echo "<option value='".$row['id']."'><b>".$row['studentNo']." :: ".ucfirst($row['surname'])."".$row['firstName']."</option>";   
                }
            }else{
                echo "<option>No Students Found </option>";
            }
            
        }
    }
  
/* Inserting a  Department */
function insert_marks(){
    include '../loginModule/login-func.php';
    $mysqli = con();
    $Programme = $_POST['Programme'];
    $intake = $_POST['intake'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $courseunits = $_POST['courseunits'];  
    $mark = $_POST['mark'];
    $studentId = $_POST['student'];
    $addedBy = $_POST['lecturer'];
    $grade = trim($_POST['grade']);
    $gp = getGP($grade);
    
    $queryCheck = "SELECT * FROM marks WHERE courseunit_programme_programmeID = '" . $Programme . "' AND semester = '" . $semester . "' AND yearOfOffering = '" . $year . "' AND student_studentID = '" . $studentId . "' AND courseunit_courseunitID = '" . $courseunits . "'";
    $query_runCheck = mysqli_query($mysqli, $queryCheck);
    $num = mysqli_num_rows($query_runCheck);
   // echo "nummmmmmmm".$gp;
    if($num > 1){
        echo 'Operation Failed - This Mark Exists';
    } else {
        
    if ($mysqli->query("INSERT INTO `marks` 
    (`mark`, `grade`, `gp`, `remarks`, `semester`, `otherRemarks`, `yearOfOffering`, `trainingHrs`, `yearPart`, `toMove`, `yearEntered`, `dateEntered`, `examMonth`, `enteredBy`, `reasonForChange`, `courseunit_courseunitID`, `courseunit_programme_programmeID`, `student_studentID`) 
     VALUES 
    ('".$mark."', '".$grade."','".$gp."', '', '".$semester."', '', '".$year."', '', '', '', '', '', '', '".$addedBy."', '', '".$courseunits."', '".$Programme."', '".$studentId."')")) {
            echo 'Operation Successful -Mark Successfully Entered';
        } else {
            echo 'Operation Failed - An Error Occured';
            echo $mysqli->error;
        }
    }
}

function getStudent($id) {
    $mysqli = con();
    $query = "SELECT * FROM student WHERE id = '" . $id . "'";
    $query_run = mysqli_query($mysqli, $query);
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
        $row = mysqli_fetch_array($query_run);     
        echo json_encode($row); 
       // echo "yes";
    }
}
function getAllStudent() {
    $mysqli = con();
    $query = "SELECT * FROM student";
    $query_run = mysqli_query($mysqli, $query);
    $num = mysqli_num_rows($query_run);
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
        if ($num>0){
                echo "<option selected='selected' value='no-value'>--Select--</option>";
                while ($row = mysqli_fetch_array($query_run)) {
                echo "<option value='".$row['id']."'><b>".$row['studentNo']." :: ".ucfirst($row['surname'])."".$row['firstName']."</option>";   
            }
        }else{
            echo "<option>No Students Found </option>";
        }
        
    }
}
function getGrading() {                 // geting all the the data in the grading table
    $mysqli = con();
    $query = "SELECT * FROM grading";
    $query_run = mysqli_query($mysqli, $query);
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
        while($row = mysqli_fetch_array($query_run)){ 
            echo json_encode($row);
        }   
       // echo "yes";
    }
}


function getGradeCol($id,$col) {                 // geting all the the data in the grading table
    $mysqli = con();
    $query = "SELECT * FROM grading WHERE id = $id";
    $query_run = mysqli_query($mysqli, $query);
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
       $row = mysqli_fetch_array($query_run); 
       return $row[$col];
    }
}

function GradeStudent($mark) {  
    $fromAplus = getGradeCol(1,'from');
    $fromA = getGradeCol(2,'from');
    $fromBplus = getGradeCol(3,'from');
    $fromB = getGradeCol(4,'from');
    $fromCplus = getGradeCol(5,'from');
    $fromC= getGradeCol(6,'from');
    $fromDplus = getGradeCol(7,'from');
    $fromD = getGradeCol(8,'from');
    $fromEplus = getGradeCol(9,'from');
    $fromE = getGradeCol(10,'from');
    $fromF = getGradeCol(11,'from');
             
    //testing the conditions and awarding grades
    switch ($mark){
        case $mark>$fromAplus:
        echo  'A+';
        break;
        case $mark>=$fromA:
        echo  'A';
        break;
        case $mark>=$fromBplus:
        echo  'B+';
        break;
        case $mark>=$fromB:
        echo  'B';
        break;
        case $mark>=$fromCplus:
        echo  'C+';
        break;
        case $mark>=$fromC:
        echo  'C';
        break;
        case $mark>=$fromDplus:
        echo  'D+';
        break;
        case $mark>=$fromD:
        echo  'D';
        break;
        case $mark>=$fromEplus:
        echo  'E';
        break;
        case $mark>=$fromE:
        echo  'E-';
        break;
        case $mark = "":
        echo  'none';
        break;
        case $mark = null:
        echo  'none';
        break;
        }
        
}

function loadTranscript($id,$sel_year,$sel_semester) {
    $no_content = "<div class='jumbotron'>No content found!</div>";
    $con = con();
    $get_details = mysqli_query($con, "SELECT * FROM student WHERE id='$id'");
    if(!$get_details){
        echo "no".mysqli_error($con);
    }
    $count_them = mysqli_num_rows($get_details);

    if ($count_them < 1) {
        echo $no_content;
        mysqli_close($con);
        return;
    }
    $student_details = mysqli_fetch_array($get_details);
    $name = $student_details['surname']."".$student_details['firstName'];
    $gender = $student_details['gender'];
    $regNo = $student_details['regNo'];
    $prog_id = $student_details['program'];

    $get_program = mysqli_query($con, "SELECT * FROM programme WHERE programmeID='$prog_id'");
    if(!$get_program){
        echo 'no'.$get_program;
    }
    $get_program_name = mysqli_fetch_array($get_details);
    $prog_name = $get_program_name['name'];

    $dob = $student_details['dob'];
    $date_of_completion = $student_details['dateofcompletion'];
    $nationality = $student_details['nationality'];
    $pic_url = '../dist/img/user-avatar.png';

    $transcript_title = "STUDENT RESULTS";
    $transcript_heading = "Student Details";
    $caption_name = "NAME";
    $caption_reg_no = "REG. NO";
    $caption_dob = "DOB";
    $caption_gender = "GENDER";
    $caption_completion = "COMPLETION";
    $caption_program = "PROGRAMME";
    $caption_course_code = "COURSE CODE";
    $caption_course_name = "COURSE NAME";
    $caption_cu = "CU";
    $caption_gp = "GP";
    $caption_grade = "GRADE";
    $caption_award = "Award";
    $caption_class_of_award = "Class of Award";
    
    echo "
        <div class='col-lg-12 text-center'>
            <b>$transcript_title</b>
            <div class='center-div'>
                <img src='$pic_url' class='img-thumbnail' width='100px'/>
            </div>
            <br/>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    $transcript_heading
                </div>
                <div class='panel-body text-left'>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_name:</b> &nbsp; $name </div>
                    </div>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_reg_no:</b> &nbsp; $regNo </div>
                    </div>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_dob:</b> &nbsp; $dob </div>
                    </div>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_gender:</b> &nbsp; $gender </div>
                    </div>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_completion:</b> &nbsp; $date_of_completion </div>
                    </div>
                    <div class='col-md-6 transcript-info '>
                        <div><b>$caption_program:</b> &nbsp; $prog_name </div>
                    </div>
                </div>
            </div>
        </div> 
    ";
    if($sel_year == "allyrs"){
        $get_years = mysqli_query($con, "SELECT yearOfOffering FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id'  GROUP BY yearOfOffering ORDER BY yearOfOffering");
    }else{
        $get_years = mysqli_query($con, "SELECT yearOfOffering FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id' AND yearOfOffering = '$sel_year' GROUP BY yearOfOffering ORDER BY yearOfOffering");
    }
    $count = 0;
    $total_gp_cu = 0;
    $total_cu = 0;
    $transcript_ui = "";
 
    while ($years = mysqli_fetch_array($get_years)) {
        $year_of_offering = getYearName($years['yearOfOffering']);
        $yrno = $years['yearOfOffering'];
        if($sel_year == "allyrs"){
            $sems = mysqli_query($con, "SELECT semester FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id'  GROUP BY semester ORDER BY yearOfOffering");
        }else{
            $sems = mysqli_query($con, "SELECT semester FROM marks WHERE student_studentID='$id' AND courseunit_programme_programmeID ='$prog_id' AND semester = '$sel_semester' GROUP BY semester ORDER BY yearOfOffering");

        }
        while ($get_semester = mysqli_fetch_array($sems)) {
            $semester = $get_semester['semester'];
            $semester_caption = getSemesterName($semester);
            $transcript_ui .= "
                <div class='col-md-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            $year_of_offering &nbsp; $semester_caption
                        </div>
                        <div class='panel-body table-scrollable'>
                            <table class='table table-striped margin-negative-10'>
                                <tr>
                                    <th> $caption_course_code </th>
                                    <th> $caption_course_name </th>
                                    <th> $caption_cu </th>
                                    <th> $caption_gp </th>
                                    <th> $caption_grade </th>
                                </tr>";
            $get_results = mysqli_query($con, "SELECT c.courseunitCode,c.name,c.creditUnits,m.mark,m.grade FROM marks m JOIN courseunit c ON  m.courseunit_courseunitID = c.courseunitID WHERE m.student_studentID='$id' AND m.courseunit_programme_programmeID ='$prog_id' AND m.yearOfOffering='$yrno' AND m.semester='$semester' ORDER BY c.courseunitCode");
            if(!$get_results){
                echo 'no'.mysqli_error($con);
            }
            while ($student_results = mysqli_fetch_array($get_results)) {
                $course_unit_code = $student_results['courseunitCode'];
                $course_unit_name = $student_results['name'];
                $grade = $student_results['grade'];
                $cu = $student_results['creditUnits'];

                //echo "grade:".$grade."<br>" ;
                $query = "SELECT * FROM grading WHERE grade = '".$grade."'";
                
                $query_run = mysqli_query($con, $query);
                if(!$query_run){
                    echo "no".mysqli_error($con);
                }
                $row = mysqli_fetch_array($query_run); 
                $gp = $row['gp'];
               
              
                

               // echo "gp:".$gp."<br>" ;

               // echo "cu:".$cu."<br>" ;
               // echo "total_cu----------".$total_cu;
                $mark = $student_results['mark'];
                
                $total_gp_cu += $gp * $cu;
                $total_cu += $cu;
                $transcript_ui .= "
                <tr>
                    <td> $course_unit_code </td>
                    <td> $course_unit_name </td>
                    <td> $cu </td>
                    <td> $gp </td>
                    <td> $grade </td>
                </tr>";
            }
           //echo "total_gp_cu-------".$total_gp_cu."<br>";
          // echo "total_cu----------".$total_cu."<br>";
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
                        <td colspan='2'> <b><i> </i></b></td>
                        <td colspan='3'><b><i> $gpa_caption &nbsp; $gpa </i></b></td>
                    </tr>
                </table>
            </div>
            </div>
            </div>";
        }
    }
    $award_name = getAwardName($prog_name);
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
    echo $transcript_ui;
    mysqli_close($con);
}
function getSemesterName($semester) {
    $sem_name = "";
    if ($semester == "1") {
        $sem_name = "Semester I";
    } else if ($semester == "2") {
        $sem_name = "Semester II";
    }
    return $sem_name;
}
function getYearName($year) {
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
function getAwardName($program) {
        $name = "DIPLOMA IN ".$program;
    return $name;
}

function getAward($cgpa) {
    if ($cgpa >= 4.5) {
        $award = "Class I (Distinction)";
    } else if ($cgpa >= 3.5) {
        $award = "Class II (Credit)";
    } else if ($cgpa >= 2){
        $award = "Class III (Pass)";
    } else {
        $award = "Fail";
    }
    return $award;
}
function getGP($grade) {  
    $strvar = settype($grade, 'string');;            
    $mysqli = con();
    $query = "SELECT * FROM grading WHERE grade = '".$strvar."'";
    $query_run = mysqli_query($mysqli, $query);
    if (!$query_run) {
        echo "Query Run Error" . mysqli_error($mysqli);
    } else {
       $row = mysqli_fetch_array($query_run); 
       $gp = $row['gp'];
       return $gp;
    }
}
