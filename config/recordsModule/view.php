
<?php
   function pageNotfound(){
?>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block" style="font-size:70px">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="http://localhost:9090/sims/pages/dash.php?token=ZGFzaGJvYXJk" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<?php
   }
   function dashboard()
   {
    ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>150</h3>
                        <p>Students</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Lecturers</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                        </div>
                        <div class="icon">

                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    
                    <div class="box box-primary">
                        <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">Notice Board</h3>
                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                            <ul class="todo-list">
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                            
                                    <span class="text">Staff Meeting</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                   
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                
                                    <span class="text">Begining of semester two</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                  
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    
                                    <span class="text">End of Semester Exams</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                  
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-eye"></i>&nbsp;View all</button>
                        </div>
                    </div>
                    
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">
               
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>
                            <h3 class="box-title">Calendar</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i></button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Add new event</a></li>
                                        <li><a href="#">Clear events</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View calendar</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                     
                        </div>
                    </div>
                    <!-- /.box -->
                </section>
            <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
<?php
   }
   function students()
   {
    ?>
        <section class="content">
            <div class="row">
                <button class="btn btn-success pull-right">Add New</button>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                        Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                        Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                        Explorer 5.5
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                        Explorer 6
                                        </td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function schoolDetails()
   {
    ?>
        <section class="content-header">
            <h1>
                Institution Details
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Institution</a></li>
                <li class="active">Update</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title">Update Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Institute ID</label>
                                        <input type="text" class="form-control"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control"  placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">University</option>
                                        <option>Vocational Institute</option>
                                        <option>High School</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Physical Address</label>
                                        <input type="text" class="form-control"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">P.O Box</label>
                                        <input type="date" class="form-control"  placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">University</option>
                                        <option>Vocational Institute</option>
                                        <option>High School</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 1</label>
                                        <input type="text" class="form-control"  placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 2</label>
                                        <input type="text" class="form-control"  placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email </label>
                                        <input type="email" class="form-control"  placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Upload Logo </label>
                                        <input type="file" class="form-control"  placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function addUser()
   {
    ?>
        <section class="content-header">
            <h1>
                System Users
                <small>Add New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">System User</a></li>
                <li class="active">Add New</li>
            </ol>
        </section>
        <section class="content">
        <div class="row">
                <div class="col-md-12">
                <?php
                    if (isset($_POST['insertUser'])) {
                            include 'focus.php';
                            add_user();
                        }
                ?>
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post">
                    <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Firstname</label>
                                    <input type="text" class="form-control" name = "fname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Surname</label>
                                    <input type="text" class="form-control"  placeholder="" name="sname">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender">
                                    <option value ="">--Select--</option>
                                    <option value ="Male">Male</option>
                                    <option value ="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date of Birth</label>
                                    <input type="date" class="form-control"  id="datepicker" name="dob">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control"  placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone No. 1</label>
                                    <input type="text" class="form-control"  placeholder="" name="phone1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone No. 2</label>
                                    <input type="text" class="form-control"  placeholder="" name="phone2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" class="form-control"  placeholder="" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control"  placeholder="" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Re-type Password</label>
                                    <input type="password" class="form-control"  placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label>Group</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="role">
                                        <option selected="selected">--Select--</option>
                                        <option>Root User</option>
                                        <option>Admin User</option>
                                        <option>Standard User</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Account Status</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="accStatus">
                                        <option selected="selected">--Select--</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Designation</label>
                                    <input type="text" class="form-control"  placeholder="" name="designation">
                                </div>
                                <div class="form-group">
                                    <label for="">Profile Picture </label>
                                    <input type="file" class="form-control"  placeholder="" >
                                </div>
                            </div>
                        </div>
                        <!--</div>-->
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="insertUser">Submit</button><a href="">Back</a>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!--</div>-->
        <!-- /.row -->
        </section>
<?php
   }
   function updateProfile($id)
   {
       $query = "SELECT * FROM users  WHERE id = '" . $id . "'";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
       $inst_id = $row['institute_instituteID'];
    ?>
        <section class="content-header">
            <h1>
                User Profile
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">User Profile</a></li>
                <li class="active">Update</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <?php
                        if (isset($_POST['updateProfile'])) {
                                $fname = $_POST['fname'];
                                $sname = $_POST['sname'];
                                $gender = $_POST['gender'];
                                $dob = $_POST['dob'];
                                $email = $_POST['email'];
                                $phone1 = $_POST['phone1'];
                                $phone2 = $_POST['phone2'];
                                $designation = $_POST['designation'];
                                $date = date('Y/m/d H:i:s');
                                include '../config/authModule/real-config.php';
                                include 'focus.php';
                                if ($mysqli->query("UPDATE `users` SET `gender` = '$gender',`email` = '$email',`dob` = '$dob', `sname` = '$sname', `fname` = '$fname', `designation` = '$designation',`updated_On` = '$date', `phone1` = '$phone1', `phone2` = '$phone2' WHERE `users`.`id` = $id AND `users`.`institute_instituteID` = $inst_id")) {
                                    msg_success('Congratulations' . "  " . $fname . " " . strtoupper($sname), 'You Have Successfully Updated your User Profile. <a href ="?token=ZGFzaGJvYXJk">Proceed to Dashboard</a>');
                                } else {
                                    msg_error('Operation Failed', 'Update Failed. Please check your network connection and try again or Contact your System Administrator');
                                    echo $mysqli->error;
                                }
                            }
                        ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title"><b><?php echo ucfirst($row['fname']) . " " . strtoupper($row['sname']) ?></b></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Firstname</label>
                                        <input type="text" class="form-control" name = "fname" value="<?php echo $row['fname'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Surname</label>
                                        <input type="text" class="form-control"  placeholder="" name="sname" value="<?php echo $row['sname'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" class="form-control"  name="designation" value="<?php echo $row['designation'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender" value="<?php echo $row['gender'] ?>" required>
                                        <option  value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                                        <option  value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date of Birth</label>
                                        <input type="date" class="form-control"  id="datepicker" name="dob" value="<?php echo $row['dob'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control"  placeholder="Enter email" name="email" value="<?php echo $row['email'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 1</label>
                                        <input type="text" class="form-control"  name = "phone1" value="<?php echo $row['phone1'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 2</label>
                                        <input type="text" class="form-control"  name = "phone2" value="<?php echo $row['phone2'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Profile Picture </label>
                                        <input type="file" class="form-control"   value="<?php echo $row['photoNAme'] ?>" >
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
                            <div class="box-footer">
                                <button name = "updateProfile" class="btn btn-primary" >Submit</button>
                                <a href="">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function page9notfound()
   {
    ?>
        <section class="content-header">
            <h1>
                404 Error Page
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">404 error</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-yellow"> 404</h2>
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                    <p>
                        We could not find the page you were looking for.
                        Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
                    </p>
                    <form class="search-form">
                        <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Institute ID</label>
                                    <input type="text" class="form-control"  placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">University</option>
                                        <option>Vocational Institute</option>
                                        <option>High School</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Physical Address</label>
                                    <input type="text" class="form-control"  placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">P.O Box</label>
                                    <input type="date" class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">University</option>
                                        <option>Vocational Institute</option>
                                        <option>High School</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone No. 1</label>
                                    <input type="text" class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone No. 2</label>
                                    <input type="text" class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email </label>
                                    <input type="email" class="form-control"  placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Logo </label>
                                    <input type="file" class="form-control"  placeholder="">
                                </div>
                            </div>
                        </div>
                        <!--</div>-->
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <!--</section>-->
<?php
   }
   function manageUsers($inst_no)
   {
    ?>
        <section class="content-header">
            <h1>
                System Users
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">System Users</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Designation</th>
                                        <th style="width:127px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM  users WHERE institute_instituteID = $inst_no ";
                                        include '../config/authModule/real-config.php';
                                        $query_run = mysqli_query($mysqli, $query);
                                        if (!$query_run) {
                                            echo "Query_Run_Error" . mysqli_error($mysqli);
                                        } else {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                $id = $row['id'];
                                                $sname = $row['sname'];
                                                $username = $row['username'];
                                                $designation = $row['designation'];
                                                echo "<tr>
                                                        <td></td>
                                                        <td>$sname</td>
                                                        <td>$username</td>
                                                        <td>$designation</td>
                                                        <td><a href='?view=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; View</a>
                                                        <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                                        </td>
                                                    </tr>
                                                    ";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                        <a href="<?php echo '?token=' . base64_encode('addUser') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add User</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function first_login_admin()
   {
    ?>
        <section class="content-header">
            <h1>
                Welcome
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">First Time Login</a></li>
                <li class="active">Update Details</li>
            </ol>
        </section>
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">First Time Login</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="callout callout-info">
                        <h4>Welcome, [Admin]</h4>
                        <p>This is your first time to Login. Please Update the <a href="?token=dXBkYXRlSW5zdERldGFpbHM">Institute Details</a> and your Profile</p>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    &copy; Scosoft Systems Inc
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </section>
<?php
   }
   function enter_student()
   {
    ?>
        <section class="content-header">
            <h1>
                Register Student
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Student</a></li>
                <li class="active">New Student</li>
            </ol>
        </section>
        <section class="content">
        <!-- Default box -->
        <div class="row">
                <div class="col-lg-12">
                    <?php
                        if (isset($_POST['enter_student'])) {
                                include 'focus.php';
                                $regNo = $_POST['reg_no'];
                                $student_no = $_POST['student_no'];
                                echo $regNo."--".$student_no;
                        if(checkExists_stdNo($_POST['student_no']) == FALSE){     
                            if(checkExists_RegNo($regNo) == FALSE){
                                register_student();
                                
                            }else{
                                msg_error('Error', 'Duplicate Registration Number');

                            }
                        }else{
                                msg_error('Error', 'Duplicate Student Number'); 
                            }
                        }
                            
                    ?>
                    <form method ="post" role="form"  enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337ab7;">
                                <div style="color:#FFF;" ><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#biodata"></i>General Information</div>
                            </div>
                            <div class="panel-body " style="background-color:#f5f5f5;" id="biodata" class="collapse">
                                <div class="row">
                                    <div class="col-lg-3" style="margin:2%;">
                                        <img src="../dist/img/user-avatar.png" width="200" height="200">
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label>Upload Photo</label>
                                            <input type="file" name="imagePic">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Registration Number</label><sup>*</sup>
                                        <input class="form-control"  name="reg_no" >
                                        <label>Student Number</label><sup>*</sup>
                                        <input class="form-control" name="student_no" required>
                                        <label>Surname</label><sup>*</sup>
                                        <input class="form-control" name="sname">
                                        <label>First Name</label><sup>*</sup>
                                        <input class="form-control"  name="fname">
                                        <label>Gender</label><sup>*</sup>
                                        <select class="form-control" name="gender">
                                            <option value="">--Select--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label>Country Of Origin</label><sup>*</sup>
                                        <select class="form-control" name="nationality">
                                            <option value="">--Select--</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Burundi">Burundi</option>
                                        </select>
                                        <label>Religion</label>
                                        <select class="form-control" name="religion">
                                            <option value="">--Select--</option>
                                            <option value="Roman Catholi">Roman Catholic</option>
                                            <option value="Anglican">Anglican</option>
                                            <option value="Moslem">Moslem</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Student Type</label><sup>*</sup>
                                        <select class="form-control" name="student_type">
                                            <option value="">--Select--</option>
                                            <option value="Current">Current</option>
                                            <option value="Alumni">Alumni</option>
                                        </select>
                                        <label>Marital Status</label>
                                        <select class="form-control" name="marital_status">
                                            <option value="">--Select--</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        <label>Residence</label>
                                        <input class="form-control"  name="residence">
                                        <label for="example-datetime-local-input" class="">Date of Birth</label><sup>*</sup>
                                        <input class="form-control" type="date"  id="example-date-input" name="dob">
                                        <label>Phone No.</label>
                                        <input class="form-control"  name="phoneno">
                                        <label>Email</label>
                                        <input type="email" class="form-control"  name="email">
                                        <label>Hall of Residence</label>
                                        <input type="text" class="form-control"  name="hall">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337ab7;">
                                <div style="color:#FFF;" ><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#Course"></i>Course Information</div>
                            </div>
                            <div class="panel-body " style="background-color:#f5f5f5;" id="Course" class="collapse">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Entry Scheme</label><sup>*</sup>
                                        <select class="form-control" name="entry_scheme">
                                            <option>Direct Entry</option>
                                            <option>Direct Entry</option>
                                            <option>Direct Entry</option>
                                            <option>Direct Entry</option>
                                        </select>
                                        <label>Intake</label>
                                        <input type="text" class="form-control"  name="academicYearEntry">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Programme</label><sup>*</sup>
                                        <select name="program" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM  programme where action='Y'";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value=''>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$row['programmeID']."'>".$row['name']."</option>
                                                ";   
                                                }
                                                }
                                            ?> 
                                        </select>
                                        <label>Date of Admission</label>
                                        <input type="date" class="form-control"  name="dateAdmission">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label>Campus/Center</label>
                                        <select name="program" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM  campus";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value=''>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$row['id']."'>".$row['centerName']."</option>
                                                ";   
                                                }
                                                }
                                            ?> 
                                        </select>
                                        <label>Date of Graduation</label>
                                        <input type= "date" class="form-control"  name="gradDate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337ab7;">
                                <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down" style="color:White;" data-toggle="collapse" data-target="#academic" aria-expanded="false"></i>Academic Background</div>
                            </div>
                            <div class="panel-body" style="background-color:#f5f5f5;" id="academic" class="collapse">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">O-Level School</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="olevelsch">
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Year of Sitting</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="olevelyr">
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">O-Level Index No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="olevelindex">
                                            </div>
                                            </div>
                                            <br>
                                            <div class="container">
                                                <a class="btn btn-default" data-toggle="collapse" data-target="#sdemo">
                                                <i class="fa fa-plus"></i>&nbsp;&nbsp;Enter UCE Results</a>
                                                <div id="sdemo" class="collapse" style="backgroud-color:#FFF;">
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-7">
                                                            <label>Subject Name</label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="1s" >
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";
                                                                            
                                                                    }
                                                                }
                                                            ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label>Grade Obtained</label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="1g" >
                                                            <option value="">--Select Grade--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="2s">
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";      
                                                                    }
                                                                }
                                                            ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="2g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="3s">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";      
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="3g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="4s">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";     
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="4g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="5s">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";   
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="5g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="6s">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";      
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="6g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="7s">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'c'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";     
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="7g" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="sopt1">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'o'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";     
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="gopt1" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="sopt2">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'o'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";    
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="gopt2" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="sopt3">
                                                                <option value ="">--Select Subject--</option>
                                                                <?php
                                                                    $query = "SELECT * FROM  uce_subjects WHERE category = 'o'";
                                                                    include '../config/authModule/real-config.php';
                                                                    $query_run = mysqli_query($mysqli, $query);
                                                                    if (!$query_run) {
                                                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                        while ($row = mysqli_fetch_array($query_run)) {
                                                                            echo "
                                                                                <option value='".$row['name']."'>".$row['name']."</option>
                                                                            ";     
                                                                        }
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label></label>
                                                            <sup>*</sup>
                                                            <select class="form-control" name="gopt3" >
                                                                <option value="">--Select Grade--</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="C3">C3</option>
                                                                <option value="C3">C4</option>
                                                                <option value="C5">C5</option>
                                                                <option value="C6">C6</option>
                                                                <option value="P7">P7</option>
                                                                <option value="P8">P8</option>
                                                                <option value="F9">F9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h5>
                                                            <b>UNEB Summary</b>
                                                        </h5>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Distinctions</label>
                                                            <input type="number" class="form-control" id="inputEmail3" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Credits</label>
                                                            <input type="number" class="form-control" id="inputEmail3" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Passes</label>
                                                            <input type="number" class="form-control" id="inputEmail3" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">A-Level School</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"  name="alevelsch">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Year of Sitting</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"  name="alevelyr">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">A-Level Index No.</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"  name="alevelindex"> 
                                                </div>
                                            </div>
                                            <br>
                                            <a   class="btn btn-default" style="margin-left:7px" data-toggle="collapse" data-target="#sademo">
                                            <i class="fa fa-plus"></i>&nbsp;&nbsp;Enter UACE Results</a>
                                            <div id="sademo" class="collapse">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-10">
                                                        <label>Subject Name</label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="1as">
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uace_subjects ";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                    } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";       
                                                                    }
                                                                }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>Grade</label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="1ag" >
                                                            <option value="">--Select Grade--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="2as">
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                            $query = "SELECT * FROM  uace_subjects ";
                                                            include '../config/authModule/real-config.php';
                                                            $query_run = mysqli_query($mysqli, $query);
                                                            if (!$query_run) {
                                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";    
                                                                }
                                                                }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="2ag" >
                                                            <option value="">--Select Grade--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="3as">
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uace_subjects ";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";     
                                                                    }
                                                                }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="3ag" >
                                                            <option value="">--Select--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="4as">
                                                            <option value ="">--Select--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uace_subjects ";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";  
                                                                    }
                                                                }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="4ag" >
                                                            <option value="">--Select--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="5as">
                                                            <option value ="">--Select Subject--</option>
                                                            <?php
                                                                $query = "SELECT * FROM  uace_subjects ";
                                                                include '../config/authModule/real-config.php';
                                                                $query_run = mysqli_query($mysqli, $query);
                                                                if (!$query_run) {
                                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                                } else {
                                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                                        echo "
                                                                            <option value='".$row['name']."'>".$row['name']."</option>
                                                                        ";     
                                                                    }
                                                                }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label></label>
                                                        <sup>*</sup>
                                                        <select class="form-control" name="5ag" >
                                                            <option value="">--Select--</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="C3">C3</option>
                                                            <option value="C3">C4</option>
                                                            <option value="C5">C5</option>
                                                            <option value="C6">C6</option>
                                                            <option value="P7">P7</option>
                                                            <option value="P8">P8</option>
                                                            <option value="F9">F9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Former Institution</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="formerInst">
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Qualification</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="formerQual">
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Year of Course</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="formerYrCourse">
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Registration No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail3" name="formerRegNo">
                                            </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337ab7;">
                                    <div style="color:#FFF;">
                                        <i class="glyphicon glyphicon-menu-down" style="color:White;" data-toggle="collapse" data-target="#medical" aria-expanded="false"></i>Medical Information
                                    </div>
                            </div>
                            <div class="panel-body" style="background-color:#f5f5f5;" id="medical">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                        <strong>
                                        <u>Does the Student have any Medical problems?</u>
                                        </strong>
                                        <input type="checkbox" value="medicalProblem">
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>If Yes, describe the medical problem.</label>
                                        <textarea style="margin: 0px; width: 1000px; height: 154px;" name="medicalProblemDesc"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger pull-right" style="margin-top: 25px;" name="enter_student">Submit</button>
                    </form>
                </div>
        </div>
        </section>
<?php
   }
   function updateinstituteDetails($inst_no){
       $query = "SELECT * FROM institute  WHERE id = '" . $inst_no . "'";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
    ?>
        <section class="content-header">
            <h1>
                Institution Details
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Institution</a></li>
                <li class="active">Update</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <?php
                        if (isset($_POST['updateInst'])) {
                            $inst_name = $_POST['inst_name'];
                            $type = $_POST['type'];
                            $address = $_POST['address'];
                            $poBox = $_POST['poBox'];
                            $tel_1 = $_POST['tel_1'];
                            $tel_2 = $_POST['tel_2'];
                            $email = $_POST['email'];
                            $inst_number = $_POST['inst_no'];
                            $date = date('Y/m/d H:i:s');
                            include '../config/authModule/real-config.php';
                            include 'focus.php';
                            if ($mysqli->query("UPDATE `institute` SET `institute_name` = '$inst_name',`poBox` = '$poBox', `address` = '$address', `telno1` = '$tel_1', `telno2` = '$tel_2', `email` = '$email', `type` = '$type', `logo` = 'a', `updated_On` = '$date' WHERE `institute`.`id` = '$inst_no'")) {
                                msg_success('Operation Successful', 'You Have successfully updated the Institute Details <a href="?token=dXBkYXRlUHJvZmlsZQ=="> Please Update your Profile to Get Started</a>');
                            } else {
                                msg_error('Operation Failed', 'Update Failed. Please check your network connection and try again');
                                echo $mysqli->error;
                            }
                        }
                    ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title">Update Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Institute ID</label>
                                        <input type="text" class="form-control" name = "inst_no" value ="<?php echo $row['institute_no'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" name ="inst_name" placeholder="" value ="<?php echo $row['institute_name'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-hidden-accessible" name ="type" style="width: 100%;" tabindex="-1" aria-hidden="true"
                                        value ="<?php echo $row['type'] ?>">
                                        <option selected="selected">University</option>
                                        <option>Vocational Institute</option>
                                        <option>High School</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Physical Address</label>
                                        <input type="text" class="form-control" name="address" value ="<?php echo $row['address'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">P.O Box</label>
                                        <input type="text" class="form-control" name="poBox" value ="<?php echo $row['poBox'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 1</label>
                                        <input type="text" class="form-control" name ="tel_1" value ="<?php echo $row['telno1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No. 2</label>
                                        <input type="text" class="form-control" name="tel_2" value ="<?php echo $row['telno2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email </label>
                                        <input type="email" class="form-control" name="email" value ="<?php echo $row['email'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Upload Logo </label>
                                        <input type="file" class="form-control"  placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="updateInst">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function view_user($id)
   {
       $query = "SELECT * FROM users  WHERE id = $id";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
   
    ?>
        <section class="content-header">
            <h1>
                User Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">User profile</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user-avatar.png" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo $row['fname'] . "  " . $row['sname'] ?></h3>
                        <p class="text-muted text-center"><?php echo $row['designation'] ?></p>
                        <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Account Status</b> <a class="pull-right"> <span class="label label-success"><?php echo $row['accStatus'] ?></span></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Last Login</b> <a class="pull-right"> <span class="label label-info">12/May/2018</span></a>
                                </li>
                        </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- About Me Box -->
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">User Details</a></li>
                        <li><a href="#timeline" data-toggle="tab">Credentials</a></li>
                        <li><a href="#settings" data-toggle="tab">Privileges</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Firstname</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control fname"  value="<?php echo $row['fname'] ?>" disabled="" name ="fname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Surname</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control sname"  value="<?php echo $row['sname'] ?>" disabled="" name="sname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Date of Birth</label>
                                        <div class="col-sm-10">
                                        <input type="date" class="form-control dob"  value="<?php echo $row['dob'] ?>"  name="dob">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-10">
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender">
                                        <option value ="<?php echo $row['gender'] ?>" selected><?php echo $row['gender'] ?></option>
                                        <option value ="Male">Male</option>
                                        <option value ="Female">Female</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Designation</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control designation"  value="<?php echo $row['designation'] ?>"  name="designation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control email"  value="<?php echo $row['email'] ?>"  name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Phone No. 1</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control phone1"  value="<?php echo $row['phone1'] ?>"  name="phone1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Phone No. 2</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control phone2"  value="<?php echo $row['phone2'] ?>"  name="phone2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" class="updatedetails">Update User Details <a href="#"></a>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success pull-right"><i class=""></i>Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control username" id="inputName" value="<?php echo $row['username'] ?>"  name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label" >Password</label>
                                        <div class="col-sm-10">
                                        <input type="password" class="form-control password" id="inputEmail" value="<?php echo $row['dwp'] ?>" disabled="" name="dwp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label" >Re-type Password</label>
                                        <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName" value="<?php echo $row['pwd'] ?>" disabled="" name="dwp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        <div class="tab-pane" id="settings">
                        </div>
                        <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
<?php
   }
   function edit_course($id)
   {
        include '../config/authModule/real-config.php';
   ?>
        <section class="content-header">
            <h1>
                Course
                <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Course</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (isset($_POST['updateCourse'])){  
                            update_course($id);     
                        }
                        
                        $query= "SELECT * FROM courseunit  WHERE courseunitID = '".$id."'";
                        $query_run= mysqli_query($mysqli, $query);
                        $row = mysqli_fetch_array($query_run);
                        
                    ?>
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Course</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Name</label>
                                        <input type="text" class="form-control" name = "cname" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Course Code</label>
                                        <input type="text" class="form-control"  placeholder="" name="code" value="<?php echo $row['courseunitCode']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Credit Units</label>
                                        <input type="text" class="form-control"  placeholder="" name="credit_units" value="<?php echo $row['creditUnits']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Year Offered</label>
                                        <input type="text" class="form-control"  placeholder="" name="year" value="<?php echo $row['yearOffered']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Semester Offered</label>
                                        <input type="text" class="form-control"  placeholder="" name="semester" value="<?php echo $row['semesterOffered']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Programme</label>
                                        <select name="programmeID" class="form-control">
                                            <?php
                                                $query = "SELECT * FROM  programme where action='Y'";
                                                include '../config/authModule/real-config.php';
                                                $query_run = mysqli_query($mysqli, $query);
                                                if (!$query_run) {
                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                        echo "
                                                            <option value='".$row['programmeID']."'>".$row['name']."</option>
                                                        ";     
                                                    }
                                                }
                                            ?> 
                                            </select>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" name="updateCourse">Save</button>
                                        <a class="btn btn-warning " href="<?php echo '?token='.base64_encode('view_course') ?>">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/.col (right) -->
                </div>
            </div>
        <!-- /.row -->
        </section>
<?php
   }
   function add_course()
   {
    ?>
        <section class="content-header">
            <h1>
                Course Units
                <small>Add New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Courseunits</a></li>
                <li class="active">Add New</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (isset($_POST['insertCourse'])){  
                            include 'focus.php';
                            insert_course();     
                            }
                        ?>
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Courseunit Name</label>
                                    <input type="text" class="form-control" name = "cname" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Courseunit Code</label>
                                    <input type="text" class="form-control"  placeholder="" name="code" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Credit Units</label>
                                    <input type="number" class="form-control"  placeholder="" name="credit_units" required min="1" max="5">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Year Offered</label>
                                    <input type="number" class="form-control"  placeholder="" name="year" required min="1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Semester Offered</label>
                                    <input type="number" class="form-control"  placeholder="" name="semester" required min="1">
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputPassword1">Programme</label>
                                        <select name="programmeID" class="form-control">
                                            <?php
                                                $query = "SELECT * FROM  programme where action='Y'";
                                                include '../config/authModule/real-config.php';
                                                $query_run = mysqli_query($mysqli, $query);
                                                if (!$query_run) {
                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                                    echo "<option value=''>--Select--</option>";
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                        echo "
                                                            <option value='".$row['programmeID']."'>".$row['name']."</option>
                                                        ";     
                                                    }
                                                }
                                            ?> 
                                        </select>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="insertCourse">Submit</button>
                                    <a class="btn btn-warning" href="<?php echo '?token='.base64_encode('view_course') ?>">Back</a>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function view_course()
   {
     ?>
        <section class="content-header">
            <h1>
                Course Units
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Course</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Course Unit</th>
                                        <th>Programme Code</th>
                                        <th>Semester</th>
                                        <th>Year</th>
                                        <th>CU</th>
                                        <th style="width:127px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //we shall need  a condition to specify the university
                                        $query = "SELECT * FROM  courseunit where action='y'";
                                        include '../config/authModule/real-config.php';
                                        $query_run = mysqli_query($mysqli, $query);
                                        if (!$query_run) {
                                            echo "Query_Run_Error" . mysqli_error($mysqli);
                                        } else {
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($query_run)) {
                                            $id = $i;
                                            $course_code= $row['courseunitCode'];
                                            $course_name= $row['name'];
                                            $semester_offered= $row['semesterOffered'];
                                            $year_offered= $row['yearOffered'];
                                            $credit_units = $row['creditUnits'];
                                            $progarmme_Id = $row['programme_programmeID'];
                                        echo "<tr>
                                        <td>$id</td>
                                        <td>$course_code</td>
                                        <td>$course_name</td>
                                        <td>$semester_offered</td>
                                        <td>$year_offered</td>
                                        <td>$credit_units</td>
                                        <td>$progarmme_Id</td>
                                        <td><a href='?edit_course=" . $row['courseunitID'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; Edit</a>
                                        <a href='?delete_course=" . $row['courseunitID'] . "' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                        </td>
                                        </tr>
                                        ";
                                        $i++;
                                        }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                        <a href="<?php echo '?token='.base64_encode('add_course') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add Course</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function add_programme()
   {
    ?>
        <section class="content-header">
            <h1>
                Programme
                <small>Add New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Programme</a></li>
                <li class="active">Add New</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (isset($_POST['insertProgramme'])){  
                            include 'focus.php';
                            insert_programme();     
                        }
                    ?>
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Programme Name</label>
                                        <input type="text" class="form-control" name = "pname" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>
                                        <input type="text" class="form-control"  placeholder="" name="category" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="number" class="form-control"  placeholder="" name="duration" required min="1" max="5">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">GradLoad</label>
                                        <input type="number" class="form-control"  placeholder="" name="gradLoad" required min="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Code</label>
                                        <input type="text" class="form-control"  placeholder="" name="code" required>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" name="insertProgramme">Submit</button>
                                        <a class="btn btn-warning" href="<?php echo '?token='.base64_encode('programme') ?>">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function edit_programme($id){
    include '../config/authModule/real-config.php';
   ?>
        <!--
        <section class="content-header">
            <h1>
                Programme
                <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Programme</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>
        -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (isset($_POST['updateProgramme'])){  
                            include 'focus.php';
                            update_programme($id);     
                        }
                        
                        $query= "SELECT * FROM programme  WHERE programmeID = '".$id."'";
                        $query_run= mysqli_query($mysqli, $query);
                        $row = mysqli_fetch_array($query_run);
                    ?>
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Programme</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Programme Name</label>
                                        <input type="text" class="form-control" name = "pname" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>
                                        <input type="text" class="form-control"  placeholder="" name="category" value="<?php echo $row['category']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="text" class="form-control"  placeholder="" name="duration" value="<?php echo $row['duration']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">GradLoad</label>
                                        <input type="text" class="form-control"  placeholder="" name="gradLoad" value="<?php echo $row['gradLoad']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Code</label>
                                        <input type="text" class="form-control"  placeholder="" name="code" value="<?php echo $row['code']; ?>">
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" name="updateProgramme">Save</button>
                                        <a class="btn btn-warning " href="<?php echo '?token='.base64_encode('programme') ?>">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function programme(){
    ?>
        <section class="content-header">
            <h1>
                Programme
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Programme</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Grad Load</th>
                                    <th>Category</th>
                                    <th style="width:127px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //we shall need  a condition to specify the university
                                    $query = "SELECT * FROM  programme where action='y'";
                                    include '../config/authModule/real-config.php';
                                    $query_run = mysqli_query($mysqli, $query);
                                    if (!$query_run) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                    } else {
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($query_run)) {
                                            $id = $i;
                                            $code= $row['code'];
                                            $name= $row['name'];
                                            $duration= $row['duration'];
                                            $gradLoad= $row['gradLoad'];
                                            $category= $row['category'];
                                            echo "<tr>
                                            <td>$id</td>
                                            <td>$code</td>
                                            <td>$name</td>
                                            <td>$duration</td>
                                            <td>$gradLoad</td>
                                            <td>$category</td>
                                            <td><a data-id='".$row['programmeID']."' class='pointer btn btn-primary btn-sm editProgram' data-toggle='tooltip' data-target='#edit' title='update Record!'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; Edit</a>
                                            <a data-id='".$row['programmeID']."' class='pointer btn btn-danger btn-sm confirmProgramDelete' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                            </td>
                                            </tr>
                                            ";
                                            $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-2 no-padding">
                        <a  class="btn btn-success btn-flat addProgram pointer" style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add Programme</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>  

        <!-- Modals -->
        <!-- Start ADD Programme Dialog Box -->
        <div class="modal fade" id="addProgram" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add A Programme</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="newProgForm" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programme Name</label>
                                    <input type="text" class="form-control" name = "pname" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <input type="text" class="form-control"  placeholder="" name="category" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Duration</label>
                                    <input type="number" class="form-control"  placeholder="" value="1" name="duration" required min="1" max="5">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">GradLoad</label>
                                    <input type="number" class="form-control"  placeholder="" value="1" name="gradLoad" required min="1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Code</label>
                                    <input type="text" class="form-control"  placeholder="" name="code" required>
                                </div>
                                <!--<button type="submit" class="btn btn-primary" name="insertProgramme">Submit</button>-->
                                <!--<a class="btn btn-warning" href="?php echo '?token='.base64_encode('programme') ?>">Back</a>-->
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeNewProg" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Program Modal -->

        <!-- Start Edit Programme Dialog Box -->
        <div class="modal fade" id="editProgram" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Programme</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="saveProgEditsForm">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programme Name</label>
                                    <input type="text" class="form-control" id="pname" name = "pname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <input type="text" class="form-control"  placeholder="" id="category" name="category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Duration</label>
                                    <input type="text" class="form-control"  placeholder="" id="duration" name="duration">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">GradLoad</label>
                                    <input type="text" class="form-control"  placeholder="" id="gradLoad" name="gradLoad">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Code</label>
                                    <input type="text" class="form-control"  placeholder="" id="code" name="code">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeEditProgramModal" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Program Modal -->

        <!-- Start Confirm Delete Programme Dialog Box -->
        <div class="modal fadeIn" id="confirmProgramDelete" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Do you want to delete the programme?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <div class="box-footer">
                            <button type="submit" class="btn submit-btn btn-primary deleteProgramBtn">Yes</button>
                            <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeDeleteProgramModal" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Confirm Delete Program Modal -->


<?php
   }
   function view_student($id){
    ?>
        <section class="content-header">
            <h1>
                View Student
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Student</a></li>
                <li class="active">View Student</li>
            </ol>
        </section>
        <section class="content">
        <!-- Default box -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                    ?>
                <div class="panel panel-default">
                    <div class="row">
                        <form method="post" role="form" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <strong>
                                        <P>Registration Number:</P>
                                        <P>Surname:</P>
                                        <P>First Name:
                                        <P>
                                        <P>Gender:</P>
                                        <P>Country Of Origin:</P>
                                        <P>Religion:</P>
                                    </strong>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <strong>
                                        <p>Student Type:</p>
                                        <p>Marital Status:</p>
                                        <p>Residence:</p>
                                        <p>Date of Birth:</p>
                                        <p>Phone No_:</p>
                                        <p>Email:</p>
                                    </strong>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="row">
                        <strong>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <p>Surname:</p>
                                <p>Country of Origin: </p>
                                <p>Phone Number 1:</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <p>Firstname:</p>
                                <p>Father/Mother:</p>
                                <p>Phone Number 2:</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <p>Othernames:</p>
                                <p>Residence:</p>
                                <p>Email:</p>
                            </div>
                        </div>
                        </strong>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                            <p><strong><u>Schools Attended</u></strong></p>
                            <p>Primary:</p>
                            <p>O-Level:</p>
                            <p>A-Level:</p>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                            <p><strong><u>Year</u></strong></p>
                            <label></label>
                            <label></label> 
                            <label></label> 
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                            <p><strong><u> Qualification</u></strong></p>
                            <label></label> 
                            <label></label> 
                            <label></label> 
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>
                                    <p>Index No:</p>
                                    <p>School Name:</p>
                                    <p>English:</p>
                                    <p>Math:</p>
                                    <p>Science:</p>
                                    <p>Social Studies:</p>
                                </strong>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>
                                    <div class="col-lg-4">
                                    <p>UCE Index No:</p>
                                    <p>Physics:</p>
                                    <p>Chem:</p>
                                    <p>Biology:</p>
                                    <p>Math:</p>
                                    <p>History:</p>
                                    <p>Geography:</p>
                                    <p>CRE:</p>
                                    <p>English:</p>
                                    <p>Optional Subject:</p>
                                    <p>Optional Subject:</p>
                                    <p>Grade:</p>
                                    <p>Mark:</p>
                                    </div>
                                </strong>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body" >
                    <div class="row">
                        <form method="post" role="form">
                        <div class="col-lg-12">
                            <p><strong>Does the Student have any Medical problems:</strong></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Desciption:</label>           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a onclick="window.print()" class="btn btn-success pull-right" style="margin-top: 25px;" name="edit">Edit</a>
            </form> 
        </section>
<?php
   }
   //creating a function to view all the students
   function view_students(){
    ?>
        <section class="content-header">
            <h1>
                Students
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Students</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <div class="row">
            <div class="col-sm-6 pull-right">
                <div class="col-sm-2">
                    <a href='<?php echo ' ?token='.base64_encode('enter_student') ?>' class="btn btn-success btn-flat  btn-sm "><i class="fa fa-plus"></i>&nbsp;Add Student</a>
                </div>
                <div class="col-sm-2">
                    <a href='<?php echo ' ?token='.base64_encode('advancedSearch') ?>' class="btn btn-success btn-flat btn-sm"><i class="fa fa-pencil"></i>&nbsp;Generate Classlist</a>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>StudentNo</th>
                                        <th>RegNo</th>
                                        <th>Surname</th>
                                        <th>Firstname</th>
                                        <th>Programme</th>
                                        <th style="width:127px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM  student";
                                        include '../config/authModule/real-config.php';
                                        $query_run = mysqli_query($mysqli, $query);
                                        if (!$query_run) {
                                        //    echo "Query_Run_Error" . mysqli_error($mysqli);
                                        } else {
                                            $i = 1;
                                        while ($row = mysqli_fetch_array($query_run)) {
                                            $id = $row['id'];
                                            $stdno = $row['studentNo'];
                                            $regno = $row['regNo'];
                                            $sname= $row['surname'];
                                            $program= $row['program'];
                                        echo "<tr>
                                        <td>$i</td>
                                        <td>$stdno</td>
                                        <td>$regno</td>
                                        <td>$sname</td>
                                        <td>$fname</td>
                                        <td>$program</td>
                                        <td><a href='?view_student=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i></a>
                                        <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i></a>
                                        </td>
                                        </tr>
                                        ";
                                        $i++;
                                        }
                                        }
                                    ?>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   function view_std($id){
        $query = "SELECT * FROM student  WHERE id = '".$id."'";
        include '../config/authModule/real-config.php';
        $query_run = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($query_run);
   
        $query_prog = "SELECT * FROM programme  WHERE programmeID = '".$row['program']."'";
        include '../config/authModule/real-config.php';
        $query_run_prog = mysqli_query($mysqli, $query_prog);
        $row_prog = mysqli_fetch_array($query_run_prog);
    ?>
        <section class="content-header">
            <h1>
                Student Details
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Student</a></li>
                <li class="active">View Student</li>
            </ol>
        </section>
        <?php
            if (isset($_POST['updatebio'])) {
                include 'focus.php';
                update_student($id);
            }
        ?>

        <!-- Main content -->
        <section class="content">
        <form class="form-horizontal" method ="post" role="form"  >
            <div class="row">
            <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/stdphotos/user-avatar.png" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo $row['fname'] . "  " . $row['sname'] ?></h3>
                        <p class="text-muted text-center"><?php echo $row['designation'] ?></p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Name</b> <a class="pull-right"> <?php echo $row['firstName'].'  '.$row['surname'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Student No</b> <a class="pull-right"><?php echo $row['studentNo'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Reg No</b> <a class="pull-right"><?php echo $row['regNo'] ?></a>
                            </li>
                        </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- About Me Box -->
                    <!-- /.box -->
                <button class="btn btn-success pull-right" name ="updatebio"><i class=""></i>Update</button>
                <button class="btn btn-danger pull-left" name ="updatebio"><i class=""></i>Deactivate</button>
            </div>
            <!-- /.col -->
                
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                    <li class="active"><a href="#General" data-toggle="tab">General</a></li>
                    <li><a href="#Programme" data-toggle="tab">Programme</a></li>
                    <li><a href="#Academic" data-toggle="tab">Academic Background</a></li>
                
                    </ul>
                    <div class="tab-content">
                    <div class="active tab-pane" id="General">
                            <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Student No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control fname"  value="<?php echo $row['studentNo'] ?>" disabled="" >
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Reg No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control sname"  value="<?php echo $row['regNo'] ?>" disabled="" >
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Firstname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control dob"  value="<?php echo $row['firstName'] ?>"  name="fname">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Surname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control gender"  value="<?php echo $row['surname'] ?>"  name="sname">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender">
                                <option value ="<?php echo $row['gender'] ?>" selected><?php echo $row['gender'] ?></option>
                                <option value ="Male">Male</option>
                                <option value ="Female">Female</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Student Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control email"  value="<?php echo $row['status'] ?>"  name="student_type">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Marital Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone1"  value="<?php echo $row['maritalStatus'] ?>"  name="marital_status">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Residence</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone2"  value="<?php echo $row['placeOfResidence'] ?>"  name="residence">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone2"  value="<?php echo $row['dob'] ?>"  name="dob">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Phone No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone2"  value="<?php echo $row['telNo'] ?>"  name="phoneno">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone2"  value="<?php echo $row['email'] ?>"  name="email">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Hall of Residence</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phone2"  value="<?php echo $row['placeOfResidence'] ?>"  name="hall">
                            </div>
                            </div>
                    
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Programme">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Entry Scheme</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control username" id="inputName" value="<?php echo $row['entryScheme'] ?>"  name="entry_scheme">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Programme</label>
                                <div class="col-sm-10">
                                <select name="program" class="form-control" >
                                <option value='<?php echo $row_prog['programmeID'] ?>' selected><?php echo $row_prog['name'] ?></option>
                                <?php
                                    $query = "SELECT * FROM  programme where action='Y'";
                                    include '../config/authModule/real-config.php';
                                    $query_run = mysqli_query($mysqli, $query);
                                    if (!$query_run) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                        } else {
                                    echo "";
                                    while ($x = mysqli_fetch_array($query_run)) {
                                        if($x['name'] == $row_prog['name']){
                                            continue;
                                        }
                                        echo "
                                            <option value='".$x['programmeID']."'>".$x['name']."</option>
                                        ";   
                                        }
                                        }
                                    ?> 
                                </select>                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Duration</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control password" id="inputEmail" value="<?php echo $row_prog['duration'] ?>"  disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label" >Programme Code</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" value="<?php echo $row_prog['code'] ?>"  disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label" >Date of Admission</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputName" value="<?php echo $row['dateOfAdmission'] ?>"  name="dateAdmission">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label" >Date of Graduation</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputName" value="<?php echo $row['gradDate'] ?>"  name="gradDate">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label" >Intake</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" value="<?php echo $row['academicyearEntry'] ?>"  name="academicYearEntry">
                                </div>
                            </div>
                        
                        
                    </div>
                    <div class="tab-pane" id="Academic">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">O-Level School</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputName" value="<?php echo $row['uceSchool'] ?>"  name="olevelsch">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Year of Sitting</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['yearOfUCE'] ?>"  name="olevelyr">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >O-Level Index No.</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['uceIndex'] ?>"  name="olevelindex">
                                </div>
                            </div>
                            <div class="container">
                                <a class="btn btn-primary" data-toggle="collapse" data-target="#sdemo">
                                <i class="fa fa-plus"></i>&nbsp;&nbsp;UCE Results</a>
                                <div id="sdemo" class="collapse" style="backgroud-color:#FFF;">
                                <?php 
                                    $query_uce = "SELECT * FROM  uceresults WHERE student_studentID = $id";
                                    include '../config/authModule/real-config.php';
                                    $query_run_uce = mysqli_query($mysqli, $query_uce);
                                    if (!$query_run_uce) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                    } else {
                                        $n = 1;
                                        while ($row_uce = mysqli_fetch_array($query_run_uce)) {
                                            $uceid = $row_uce['id'];
                                            $subject = $row_uce['subject'];
                                            $result = $row_uce['result'];
                                    ?>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                    <input type ="hidden" name = "<?php echo $n.'uceid' ?>" value = "<?php echo $uceid ?>">
                                
                                        <select class="form-control" name="<?php echo $n.'s' ?>">
                                            <option value ="<?php echo $subject ?>" selected><?php echo $subject ?></option>
                                            <?php
                                                $query = "SELECT * FROM  uce_subjects";
                                                include '../config/authModule/real-config.php';
                                                $query_run = mysqli_query($mysqli, $query);
                                                if (!$query_run) {
                                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                                    } else {
                                                while ($r = mysqli_fetch_array($query_run)) {
                                                    echo "
                                                        <option value='".$r['name']."'>".$r['name']."</option>
                                                    ";
                                                            
                                                    }
                                                    }
                                                ?> 
                                            </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="<?php echo $n.'g' ?>" >
                                            <option value="<?php echo $result ?>" selected><?php echo $result ?></option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="C3">C3</option>
                                            <option value="C3">C4</option>
                                            <option value="C5">C5</option>
                                            <option value="C6">C6</option>
                                            <option value="P7">P7</option>
                                            <option value="P8">P8</option>
                                            <option value="F9">F9</option>
                                            </select>
                                    </div>
                                </div>
                                <?php
                                    $n++;
                                    }
                                    
                                    }
                                    ?>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">A-Level School</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputName" value="<?php echo $row['uaceSchool'] ?>"  name="alevelsch">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Year of Sitting</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['yearOfUace'] ?>"  name="alevelyr">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >A-Level Index No.</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['uaceIndex'] ?>"  name="alevelindex">
                                </div>
                            </div>
                            <div class="container">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#ssademo">                
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;UACE Results</a>
                                <div id="ssademo" class="collapse">
                                <?php 
                    
                                    $query_uace = "SELECT * FROM  uace_results WHERE student_studentID = $id";
                                    include '../config/authModule/real-config.php';
                                    $query_run_uace = mysqli_query($mysqli, $query_uace);
                                    if (!$query_run_uace) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                    } else {
                                        $num = 1;
                                        while ($row_uace = mysqli_fetch_array($query_run_uace)) {
                                            $uaceid = $row_uace['id'];
                                            $subject = $row_uace['subject'];
                                            $result = $row_uace['result'];
                                            //echo 'uace'.$subject;
                                            //echo 'uace'.$result;
                                        
                                    ?>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                    <input type ="hidden" name = "<?php echo $num.'uaceid' ?>" value = "<?php echo $uaceid ?>">
                                        <select class="form-control"  name="<?php echo $num.'as' ?>">
                                            <option value ="<?php echo $subject ?>" selected><?php echo $subject ?></option>
                                            <?php
                                            $query = "SELECT * FROM  uace_subjects ";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            while ($w = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$w['name']."'>".$w['name']."</option>
                                                ";
                                                }
                                                }
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="<?php echo $num.'ag' ?>" >
                                            <option value="<?php echo $result ?>" selected><?php echo $result ?></option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="C3">C3</option>
                                            <option value="C3">C4</option>
                                            <option value="C5">C5</option>
                                            <option value="C6">C6</option>
                                            <option value="P7">P7</option>
                                            <option value="P8">P8</option>
                                            <option value="F9">F9</option>
                                            </select>
                                    </div>
                                </div>
                                <?php
                                $num++;
                                    }
                                    }
                                    ?>
                        
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Former Instituttion</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputName" value="<?php echo $row['formerInstitution'] ?>"  name="formerInst">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Qualification</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['formerQualification'] ?>"  name="formerQual">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Year of Course</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['formerYearCourse'] ?>"  name="formerCourse">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label" >Registration</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control " id="inputEmail" value="<?php echo $row['formerRegNo'] ?>"  name="formerRegNo">
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    
                    <!-- /.tab-pane -->
                    </div>
            
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
<?php
   }
   function colleges()
   {
    ?>
        <section class="content-header">
            <h1>
                Colleges
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Colleges</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th style="width:127px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //we shall need  a condition to specify the university
                                    $query = "SELECT * FROM  college";
                                    include '../config/authModule/real-config.php';
                                    $query_run = mysqli_query($mysqli, $query);
                                    if (!$query_run) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                    } else {
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($query_run)) {
                                            $id = $i;
                                            $shortname= $row['shortname'];
                                            $fullname= $row['fullname'];
                                            echo "<tr>
                                            <td>$id</td>
                                            <td>$shortname</td>
                                            <td>$fullname</td>
                                            <td><a data-id='".$row['collegeId']."' class='pointer btn btn-primary btn-sm editCollege' data-toggle='tooltip' data-target='#edit' title='update Record!'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; Edit</a>
                                            <a data-id='".$row['collegeId']."' class='pointer btn btn-danger btn-sm confirmCollegeDelete' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                            </td>
                                            </tr>
                                            ";
                                            $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-2 no-padding">
                        <a  class="btn btn-success btn-flat addCollege pointer" style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add College</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>  

        <!-- Modals -->
        <!-- Start ADD College Dialog Box -->
        <div class="modal fade" id="addCollege" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add A College</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="newCollegeForm" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="collegeShortname">College Short Name</label>
                                    <input type="text" class="form-control" name = "shortname" required>
                                </div>
                                <div class="form-group">
                                    <label for="collegeFullname">College Full name</label>
                                    <input type="text" class="form-control"  placeholder="" name="fullname" required>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeNewCollege" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add College Modal -->

        <!-- Start Edit College Dialog Box -->
        <div class="modal fade" id="editCollege" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit College</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="saveCollegeEditsForm">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">College Short Name</label>
                                    <input type="text" class="form-control"  id="shortname" name="shortname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">College Full name</label>
                                    <input type="text" class="form-control"  placeholder="" id="fullname" name="fullname">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeEditCollegeModal" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit College Modal -->

        <!-- Start Confirm Delete College Dialog Box -->
        <div class="modal fadeIn" id="confirmCollegeDelete" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Do you want to delete the College?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <div class="box-footer">
                            <button type="submit" class="btn submit-btn btn-primary deleteCollegeBtn">Yes</button>
                            <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeDeleteCollegeModal" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Confirm Delete College Modal -->

<?php
   }
   function departments()
   {
    ?>
       <section class="content-header">
            <h1>
                Departments
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Departments</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>College</th>
                                    <th style="width:127px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //Getting all departments
                                    $query = "SELECT * FROM  department";
                                    include '../config/authModule/real-config.php';
                                    $query_run = mysqli_query($mysqli, $query);
                                    if (!$query_run) {
                                        echo "Query_Run_Error" . mysqli_error($mysqli);
                                    } else {
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($query_run)) {
                                            $id = $i;
                                            $shortname= $row['code'];
                                            $fullname= $row['name'];
                                            echo "<tr>
                                            <td>$id</td>
                                            <td>$shortname</td>
                                            <td>$fullname</td>
                                            ";
                                            $queryCollege = "SELECT fullname FROM  college WHERE collegeId =  '".$row['college_collegeId']."'";
                                            include '../config/authModule/real-config.php';
                                            $query_runCollege = mysqli_query($mysqli, $queryCollege);
                                            while ($rowCollege = mysqli_fetch_array($query_runCollege)) {
                                                $CollegeName = $rowCollege['fullname'];
                                                echo "<td>$CollegeName</td>";
                                            }
                                            echo "
                                            
                                            <td><a data-id='".$row['college_collegeId']."' class='pointer btn btn-primary btn-sm editCollege' data-toggle='tooltip' data-target='#edit' title='update Record!'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; Edit</a>
                                            <a data-id='".$row['college_collegeId']."' class='pointer btn btn-danger btn-sm confirmCollegeDelete' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                            </td>
                                            </tr>
                                            ";
                                            $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-2 no-padding">
                        <a  class="btn btn-success btn-flat newDepForm pointer" style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add Department</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            
            <!-- /.row -->
        </section>  
 <!-- Modals -->
        <!-- Start ADD College Dialog Box -->
        <div class="modal fade" id="newDepForm" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add A Department</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="DepForm" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="college">Select College</label>
                                    <select name="college" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM  college;";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value=''>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$row['collegeId']."'>".$row['fullname']."</option>
                                                ";   
                                                }
                                                }
                                            ?> 
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" class="form-control" name = "code" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control"  placeholder="" name="name" required>
                                </div>
                               
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeNewDep" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Department Modal -->

        <!-- Start Edit Department Dialog Box -->
        <div class="modal fade" id="editDep " role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Departmemnt</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <form role="form" id="saveDepEditsForm">
                        <div class="box-body">
                                <div class="form-group">
                                    <label for="college">Select College</label>
                                    <select name="college" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM  college;";
                                            include '../config/authModule/real-config.php';
                                            $query_run = mysqli_query($mysqli, $query);
                                            if (!$query_run) {
                                                echo "Query_Run_Error" . mysqli_error($mysqli);
                                                } else {
                                            echo "<option value=''>--Select--</option>";
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                echo "
                                                    <option value='".$row['collegeId']."'>".$row['fullname']."</option>
                                                ";   
                                                }
                                                }
                                            ?> 
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" class="form-control" name = "code" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control"  placeholder="" name="name" required>
                                </div>
                               
                                <div class="box-footer">
                                    <button type="submit" class="btn submit-btn btn-primary save-modal-btn">Save</button>
                                    <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeNewDep" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit College Modal -->

        <!-- Start Confirm Delete College Dialog Box -->
        <div class="modal fadeIn" id="confirmCollegeDelete" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Do you want to delete the College?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-alert-wrapper"></div>
                        <!-- form start -->
                        <div class="box-footer">
                            <button type="submit" class="btn submit-btn btn-primary deleteCollegeBtn">Yes</button>
                            <button type="button" class="btn close-modal-btn btn-default pull-right dismiss-modal-btn" id="closeDeleteCollegeModal" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Confirm Delete College Modal -->


<?php
   }
   function lecturers()
   {
    ?>
        html for lecturers goes here

<?php
   }
   function grading(){
       ?>
        <section class="content-header">
            <h1>
                Course Units::Grading
                <small>Manage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Grading</a></li>
                <li class="active">Manage</li>
            </ol>
        </section>
        <section class="content">
        <div class="col-md-6">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr style='text-align:center'>
                  <th style='text-align:center'>From</th>
                  <th style='text-align:center'>To</th>
                  <th style='text-align:center'>Grade</th>
                  <th style='text-align:center'>GP</th>
                  <th style='text-align:center'>Comment</th>
                </tr>
                <tbody>
                <?php
                                    //we shall need  a condition to specify the university
                    $query = "SELECT * FROM  grading";
                    include '../config/authModule/real-config.php';
                    $query_run = mysqli_query($mysqli, $query);
                    if (!$query_run) {
                        echo "Query_Run_Error" . mysqli_error($mysqli);
                    } else {
                        while ($row = mysqli_fetch_array($query_run)) {
                            $id = $i;
                            $from= $row['from'];
                            $to= $row['to'];
                            $grade= $row['grade'];
                            $gp= $row['gp'];
                            $comment= $row['comment'];
                            echo "<tr style='text-align:center'>
                            <td>$from</td>
                            <td>$to</td>
                            <td style='font-weight:bold;'>$grade</td>
                            <td style='font-weight:bold;'>$gp</td>
                            <td style='font-style:italics;'>$comment</td>
                            </tr>
                            ";
                    
                        }
                    }
                                ?>
              </tbody>
              </table>

            </div>
            <!-- /.box-body -->
            <a href="<?php echo '?token='.base64_encode('gradingEdit') ?>" class="pull-right"><i class ="fa fa-edit"></i>Make Changes</a>
          </div>
         

        </div>
        </section>

       <?php
   }
   function gradingEdit(){
    ?>
     <section class="content-header">
         <h1>
             Course Units::Grading
             <small>Manage</small>
         </h1>
         <ol class="breadcrumb">
             <li><a><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a>Grading</a></li>
             <li class="active">Manage</li>
         </ol>
     </section>
     <section class="content">
     <div class="col-md-6">
       <div class="box box-primary">
         <!-- /.box-header -->
         <div class="box-body">
           <table class="">
             <tbody><tr style='text-align:center'>
               <th style='text-align:center'>From</th>
               <th style='text-align:center'>To</th>
               <th style='text-align:center'>Grade</th>
               <th style='text-align:center'>GP</th>
               <th style='text-align:center'>Comment</th>
             </tr>
             <tbody>
             <?php
                                 //we shall need  a condition to specify the university
                 $query = "SELECT * FROM  grading";
                 include '../config/authModule/real-config.php';
                 $query_run = mysqli_query($mysqli, $query);
                 if (!$query_run) {
                     echo "Query_Run_Error" . mysqli_error($mysqli);
                 } else {
                     while ($row = mysqli_fetch_array($query_run)) {
                         $id = $i;
                         $from= $row['from'];
                         $to= $row['to'];
                         $grade= $row['grade'];
                         $gp= $row['gp'];
                         $comment= $row['comment'];
                         echo "<tr style='text-align:center'>
                         <td><input type='text' style='width:50px'value=$from required></td>
                         <td><input type='text' style='width:50px' value=$to required></td>
                         <td style='font-weight:bold;'><input type='text' style='width:50px' value=$grade required></td>
                         <td ><input type='text' style='width:50px' value=$gp required></td>
                         <td style='font-style:italics;'><input type='text' style='width:150px' value='$comment' required></td>
                         </tr>
                         ";
                 
                     }
                 }
                             ?>
           </tbody>
           </table>

         </div>
       </div>
       <button type="submit"  class="btn btn-success btn-flat pull-right">Save Changes</button>


     </div>
     </section>

    <?php
}
  function advancedSearch(){
  
      ?>
         <!-- Content Header (Page header) -->
         <section class="content-header">
                    <h1>
              Students::Advanced Search
                  <small>Search</small>
              </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-3">

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
</div>
<div class="col-lg-1">
                                            <label>Intake</label>
                                            <select class="form-control bulk-year" required>
                                                <option value="">None</option>
                                                <option value="1">Year 1</option>
                                                <option value="2">Year 2</option>
                                                <option value="3">Year 3</option>

                                            </select>
</div>
<div class="col-lg-1">
                                            <label>Year</label>
                                            <select class="form-control bulk-year" required>
                                                <option value="">Select</option>
                                                <option value="1">Year 1</option>
                                                <option value="2">Year 2</option>
                                                <option value="3">Year 3</option>

                                            </select>
</div>
<div class="col-lg-2">
                                            <label>Semester</label>
                                            <select class="form-control bulky-semester">
                                                <option value="">--Select--</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                            </select>
                                            </div>
                                            <div class="col-lg-3">
                                            <label>Courseunit</label>
                                            <select class="form-control bulk-courseunit">
                                                <!-- JS populate courseunits -->
                                            </select>
                                            </div>
                                            
                                            <div class="col-lg-2" style="margin-top:25px">
                                              
                                                <button class="btn btn-primary btn-flat  btn-sm bulk-result-entry  spin-load "><i class="fa fa-arrow-right"></i>&nbsp;Go</button>
                                                <button class="btn btn-success btn-flat  btn-sm export-students  spin-load  "><i class="fa fa-file-excel-o"></i>&nbsp;Export to Excel</button>
                                                &nbsp; &nbsp;
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        
                        <div class="col-lg-12 ">
                        <span class = "badge bg-red"></span>
                            <section class="content">
                                <div class = "badge bg-blue program"></div>
                                <div class="row">
                                    <div class="col-xs-12 " >
                                       
                                            
                                    </div>
                                </div>
                        </div>
                        </section>
      <?php
  }
?>

