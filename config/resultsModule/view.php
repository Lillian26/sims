<?php
/**
 * FUNCTIONS FOR MARKS ENTRY
 */
   function entermarks(){
    include '../config/authModule/real-config.php';
    $user = getfield('fname',$mysqli);
  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
                Entermarks
                <small>Control panel</small>
            </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-header with-border">

                        Select Entry Mode
                    </div>
                    <div class="box-body">
                        <center>
                            <button class="btn btn-success btn-flat individualmarksentry" name="individualmarksentry"><i class=""></i>Individual</button>
                            <a href ="<?php echo ' ?call='.base64_encode('bulkentry') ?>" class="btn btn-primary btn-flat"><i class=""></i>Bulky Entry</a>
                        </center>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <div class="modal fade" id="enterMarks" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Enter Marks</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-alert-wrapper"></div>
                    <!-- form start -->
                    <form role="form" id="enterNewMark">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Programme</label>
                                            <select name="Programme" class="form-control Programme">
                                                <?php
                                            $query = "SELECT * FROM  programme;";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value=''>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$row['programmeID']."'>".$row['code']."-".$row['category']."</option>
                                                ";   
                                                }
                                             }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Intake</label>
                                            <select class="form-control intake" name="intake">
                                                <option selected="selected">--Select--</option>
                                                <option value="2014/2015">2014/2015</option>
                                                <option value="2014/2015">2014/2015</option>
                                                <option value="2014/2015">2014/2015</option>
                                                <option value="2014/2015">2014/2015</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Year</label>
                                            <select class="form-control yearOffered" name="year">
                                                <option selected="selected">--Select--</option>
                                                <option value="1">Year 1</option>
                                                <option value="2">Year 2</option>
                                                <option value="3">Year 3</option>
                                                <option value="4">Year 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Semester</label>
                                            <select class="form-control semester" name="semester">
                                                <option selected="selected">--Select--</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                                <option value="3">Semester 3</option>
                                                <option value="4">Semester 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Courseunit</label>
                                            <select class="form-control courseunits" name="courseunits">
                                                <!--courseunits populated it dynamically -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" style="background-color:#ecf0f5;">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student</label>
                                            <select class="form-control student" name="student">
                                                <!--students populated it dynamically -->
                                            </select>
                                        </div>
                                        <div>
                                            <table class="details-student">
                                                <tr>
                                                    <td rowspan="5" class="details-pic"></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>REG NO:</td>
                                                    <td class="details-regNo" style = "font-weight:bold;"></td>
                                                </tr>
                                                <tr>
                                                    <td>STD NO:</td>
                                                    <td class="details-studentNo" style = "font-weight:bold;"></td>
                                                </tr>
                                                <tr>
                                                    <td>NAME:</td>
                                                    <td class="details-name" style = "font-weight:bold;"></td>
                                                </tr>
                                                <tr>
                                                    <td>INTAKE:</td>
                                                    <td class="details-intake" style = "font-weight:bold;"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1" class="pull-left">Mark</label>
                                            <input type="number" class="form-control final-mark" style="float:center;font-size:20px;font-weight:bold;" min="0" max="100" width="20px" name="mark">
                                        </div>
                                        <table class="pull-left ">
                                            <tr>
                                                <td>GRADE:</td>
                                                <td class="gradeStd" style = "font-weight:bold;"></td>
                                            </tr>
                                            <tr>
                                                <td class="gradePt">GP:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>CU:</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <div>
                                            <input type="hidden" class="form-control" value="<?php echo $user ?>" name="lecturer">
                                            <input type="hidden" class="form-control gradeT" value="" name="grade">
                                            <input type="hidden" class="form-control cuT" value="" name="cu">

                                        </div>

                                    </div>
                                    <div class="pull-right" style="margin-top:10px">
                                        <button type="submit" class="btn submit-btn btn-primary save-modal-btn btn-flat">Submit</button>
                                        <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn btn-flat" id="" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.form -->
                </div>
            </div>
        </div>
    </div>

    <?php
   }
   /**
 * FUNCTIONS FOR MARKS ENTRY
 */
function singleResult(){
  ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View Single Result
                <small>Enter Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <div class="row">
            <div class="col-sm-6 pull-right">
                <div class="col-sm-2">
                    <a href='<?php echo ' ?call='.base64_encode('entermarks') ?>' class="btn btn-success btn-flat  btn-sm "><i class="fa fa-plus"></i>&nbsp;Add Result</a>
                </div>
                <div class="col-sm-2">
                    <a href='<?php echo ' ?call='.base64_encode('editsingleresult') ?>' class="btn btn-success btn-flat btn-sm"><i class="fa fa-pencil"></i>&nbsp;Edit Result</a>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-success btn-flat btn-sm"><i class="fa fa-print"></i>&nbsp;Print</button>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="col-lg-2">
                                        <label>Student</label>
                                        <select name="allstudents" class="form-control allstudents">
                                            <?php
                                            $query = "SELECT * FROM  student";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value='none'>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "<option value='".$row['id']."'><b>".ucfirst($row['surname'])." ".$row['firstName']."</option>";   

                                                }
                                                }
                                            ?>
                                        </select>
                                        <div class="error"><i style="color:red;font-size:15px;">Please select a Student!</i></div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Year</label>
                                        <select class="form-control year">
                                            <option value="">--Select--</option>
                                            <option value="1">Year 1</option>
                                            <option value="2">Year 2</option>
                                            <option value="3">Year 3</option>
                                            <option value="allyrs">All Years</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Semester</label>
                                        <select class="form-control semester">
                                            <option value="">--Select--</option>
                                            <option value="1">Semester 1</option>
                                            <option value="2">Semester 2</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2" style="margin-top:25px">
                                        <button class="btn btn-primary btn-flat  btn-sm load-result"><i class="show-fa"></i>&nbsp;Load Result</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content results-wrapper" style="margin-top:-132px;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 details-student">

                                </div>
                                <div class="col-lg-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
function EditSingleResult(){
    ?>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
              Edit Single Result
                  <small>Enter Details</small>
              </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <label>Student</label>
                                            <select name="allstudents" class="form-control edit-allstudents" required>
                                                <?php
                                              $query = "SELECT * FROM  student";
                                              include '../config/authModule/real-config.php';
                                              $query_run = mysqli_query($mysqli, $query);
                                              if (!$query_run) {
                                                  echo "Query_Run_Error" . mysqli_error($mysqli);
                                                  } else {
                                              echo "<option value='none'>--Select--</option>";
                                              while ($row = mysqli_fetch_array($query_run)) {
                                                  echo "<option value = '".$row['id']."' data-prog = '".$row['program']."'><b>".ucfirst($row['surname'])." ".$row['firstName']."</option>";   

                                                  }
                                                  }
                                              ?>

                                            </select>

                                            <label>Year</label>
                                            <select class="form-control edit-year" required>
                                                <option value="">Select</option>
                                                <option value="1">Year 1</option>
                                                <option value="2">Year 2</option>
                                                <option value="3">Year 3</option>

                                            </select>

                                            <label>Semester</label>
                                            <select class="form-control edit-semester">
                                                <option value="">--Select--</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                            </select>
                                            <label>Courseunit</label>
                                            <select class="form-control edit-courseunit">
                                                <!-- JS populate courseunits -->
                                            </select>
                                            <div class="">
                                                <br>
                                                <button class="btn btn-primary btn-flat  btn-sm edit-result  spin-load"><i class="fa fa-arrow-right"></i>&nbsp;Go</button>
                                                &nbsp; &nbsp;

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        
                        <div class="col-lg-6 ">
                        <span class = "badge bg-red"></span>
                            <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box box-primary">
                                            <div class="modal-alert-wrapper"></div>
                                            <div class="box-body show-courseunits-edit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </section>

                        <?php
  }
  function bulkyEntry(){
  
      ?>
         <!-- Content Header (Page header) -->
         <section class="content-header">
                    <h1>
              Bulk Marks Entry
                  <small>Enter Details</small>
              </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <label>Programme</label>
                                            <select name="allstudents" class="form-control bulk-prog" id ="bulk-prog" required>
                                                <?php
                                              $query = "SELECT * FROM  programme";
                                              include '../config/authModule/real-config.php';
                                              $query_run = mysqli_query($mysqli, $query);
                                              if (!$query_run) {
                                                  echo "Query_Run_Error" . mysqli_error($mysqli);
                                                  } else {
                                              echo "<option value='none'>--Select--</option>";
                                              while ($row = mysqli_fetch_array($query_run)) {
                                                  echo "<option value = '".$row['programmeID']."' ><b>".ucfirst($row['name'])."</option>";   

                                                  }
                                                  }
                                              ?>

                                            </select>

                                            <label>Year</label>
                                            <select class="form-control bulk-year" required>
                                                <option value="">Select</option>
                                                <option value="1">Year 1</option>
                                                <option value="2">Year 2</option>
                                                <option value="3">Year 3</option>

                                            </select>

                                            <label>Semester</label>
                                            <select class="form-control bulky-semester">
                                                <option value="">--Select--</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                            </select>
                                            <label>Courseunit</label>
                                            <select class="form-control bulk-courseunit">
                                                <!-- JS populate courseunits -->
                                            </select>
                                            <div class="">
                                                <br>
                                                <button class="btn btn-primary btn-flat  btn-sm bulk-result-entry  spin-load"><i class="fa fa-arrow-right"></i>&nbsp;Go</button>
                                                &nbsp; &nbsp;

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        
                        <div class="col-lg-6 ">
                        <span class = "badge bg-red"></span>
                            <section class="content">
                                <div class = "badge bg-blue program"></div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box box-primary">
                                            <div class="modal-alert-wrapper"></div>
                                            <div class="box-body show-studentsmarks-bulk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </section>
      <?php
  }

    ?>