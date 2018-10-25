<?php

function classname($name) {
    switch ($name) {
        case 1:
            $realname = 'Senior One';
            break;

        case 2:
            $realname = 'Senior Two';
            break;

        case 3:
            $realname = 'Senior Three';
            break;

        case 4:
            $realname = 'Senior Four';
            break;

        case 5:
            $realname = 'Senior Five';
            break;

        case 6:
            $realname = 'Senior Six';
            break;
    }
    return $realname;
}

function dashboard() {
    ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>Senior One</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>Senior Two</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>Senior Three</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Senior Four</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>3325</td>
                                            <td>10/21/2013</td>
                                            <td>3:20 PM</td>
                                            <td>$234.34</td>
                                        </tr>
                                        <tr>
                                            <td>3324</td>
                                            <td>10/21/2013</td>
                                            <td>3:03 PM</td>
                                            <td>$724.17</td>
                                        </tr>
                                        <tr>
                                            <td>3323</td>
                                            <td>10/21/2013</td>
                                            <td>3:00 PM</td>
                                            <td>$23.71</td>
                                        </tr>
                                        <tr>
                                            <td>3322</td>
                                            <td>10/21/2013</td>
                                            <td>2:49 PM</td>
                                            <td>$8345.23</td>
                                        </tr>
                                        <tr>
                                            <td>3321</td>
                                            <td>10/21/2013</td>
                                            <td>2:23 PM</td>
                                            <td>$245.12</td>
                                        </tr>
                                        <tr>
                                            <td>3320</td>
                                            <td>10/21/2013</td>
                                            <td>2:15 PM</td>
                                            <td>$5663.54</td>
                                        </tr>
                                        <tr>
                                            <td>3319</td>
                                            <td>10/21/2013</td>
                                            <td>2:13 PM</td>
                                            <td>$943.45</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                    <hr>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-gear"></i>  <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Notifications Panel
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small"><em>4 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small"><em>27 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small"><em>11:32 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                            <span class="pull-right text-muted small"><em>11:13 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-warning fa-fw"></i> Server Not Responding
                            <span class="pull-right text-muted small"><em>10:57 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                            <span class="pull-right text-muted small"><em>9:49 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-money fa-fw"></i> Payment Received
                            <span class="pull-right text-muted small"><em>Yesterday</em>
                            </span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                    <a href="#" class="btn btn-default btn-block">View Details</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-times fa-fw"></i> Busy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i> Away
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send
                            </button>
                        </span>
                    </div>
                </div>
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <?php
}

function one($class) {
    include 'users_report.php';
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">::Students Biodata / <?php echo $class ?></h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" ">
                <div class="panel-heading" style="background-color:#f5f5f5;"">

                    <a href ="?token=enter" data-toggle="tooltip" title="Add Record"><i class="fa fa-plus-square fa-1x" style="margin-left:70%;color:#333;">&nbsp&nbspAdd New Student</i></a>&nbsp&nbsp
                    <a href ="users_report.php?generatereport=ROS&class='".$class."'" data-toggle="tooltip" title="Click View Report"><i class="fa fa-print fa-1x" style="color:#333;">&nbsp&nbspPrint Classlist</i></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Admission No</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Nationality</th>
                                    <th>Type</th>
                                    <th style="width:140px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM  biodata WHERE class = '" . $class . "'";
                                include "../php/core.inc.php";
                                $query_run = mysqli_query($con, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($con);
                                } else {
                                    while ($row = mysqli_fetch_array($query_run)) {
                                        $admission_no = $row['admission_no'];
                                        $fname = $row['fname'];
                                        $sname = $row['sname'];
                                        $name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
                                        $date_of_birth = $row['dob'];
                                        $residence = $row['residence'];
                                        $section = $row['section'];
                                        $date_joined = $row['date_joined'];
                                        $house = $row['house'];
                                        $cls = $row ['class'];
                                        $student_type = $row['student_type'];
                                        //   $nationality = $row['nationality'];
                                        $gender = $row['gender'];

                                        echo "<tr class='odd gradeX' id =''>";
                                        echo "<td>$admission_no</td> ";
                                        echo "<td>$name</a> </td> ";
                                        echo "<td>$gender</td>";
                                        echo "<td> $student_type</td>";
                                        echo "<td> $nationality</td>";
                                        echo '<td style="width:181px;">
                            <center>
                            <a href="?view=' . $row['student_no'] . '" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;|&nbsp; View</a>
                            <a href="?id=' . $row['student_no'] . '&studentclass=' . $cls . '" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete Record!"><i class="glyphicon glyphicon-trash"></i>&nbsp;|&nbsp; Del</a>
                            </center>
                            </td>';
                                        echo "</tr>  ";
                                        echo '
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content" style="background-color:;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">::Mutebi Ronald</h4>
        </div>
        <div class="modal-body">
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                                           ';
                                    }
                                }
                                ?>

                            </tbody>
                            <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->


            </div>
            <?php
        }

        function entry() {
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">::Students Biodata / New Entry</h2> 
                </div>
            </div>
            <?php
                  if (isset($_POST['saveUser'])) {
                    //Biodata
                    $rand = rand(1000, 20000);
                    $studentNo = '218' . $rand;
                    $admissionNo = $_POST['admission_no'];
                    $sname = $_POST['sname'];
                    $fname = $_POST['oname'];
                    $gender = $_POST['gender'];
                    $nationality = $_POST['nationality'];
                    $student_type = $_POST['student_type'];
                    $house = $_POST['house'];
                    $class = $_POST['class'];
                    $fname = $_POST['fname'];
                    $religion = $_POST['religion'];
                    $residence = $_POST['residence'];
                    $dob = $_POST['dob'];
                    $date_joined = $_POST['date_joined'];
                    $origin = $_POST['student_type'];
                    $section = $_POST['section'];
                    $section = $_POST['section'];
                    $fullName = $sname . "" . $fname;
                    //Parent
                    $psname = $_POST['psname'];
                    $pphone_1 = $_POST['pphone_1'];
                    $fpname = $_POST['fpname'];
                    $pgender = $_POST['pgender'];
                    $pphone_2 = $_POST['pphone_2'];
                    $poname = $_POST['poname'];
                    $presidence = $_POST['presidence'];
                    $pemail = $_POST['pemail'];
                    //Nok
                    $n_sname = $_POST['n_sname'];
                    $n_phone_1 = $_POST['n_phone_1'];
                    $n_fname = $_POST['n_fname'];
                    $n_phone_2 = $_POST['n_phone_2'];
                    $n_oname = $_POST['n_oname'];
                    $n_email = $_POST['n_email'];
                    //Academic Background
                    $prevsch1 = $_POST['prevsch1'];
                    $prevsch2 = $_POST['prevsch2'];
                    $prevsch3 = $_POST['prevsch3'];
                    $prevsch1Period = $_POST['prevsch1Period'];
                    $prevsch2Period = $_POST['prevsch2Period'];
                    $prevsch3Period = $_POST['prevsch3Period'];
                    $prevsch1Qual = $_POST['prevsch1Qual'];
                    $prevsch2Qual = $_POST['prevsch2Qual'];
                    $prevsch3Qual = $_POST['prevsch3Qual'];
                    //PLE Results
                    $pleIndexNo = $_POST['pleIndexNo'];
                    $schNameple = $_POST['schNameple'];
                    $pleEng = $_POST['pleEng'];
                    $pleMath = $_POST['pleMath'];
                    $pleSci = $_POST['pleSci'];
                    $pleSST = $_POST['pleSST'];
                    //UCE Results
                    $uceIndexNo = $_POST['uceIndexNo'];
                    $ucePhy = $_POST['ucePhy'];
                    $uceChem = $_POST['uceChem'];
                    $uceBio = $_POST['uceBio'];
                    $uceMath = $_POST['uceMath'];
                    $uceHist = $_POST['uceHist'];
                    $uceGeo = $_POST['uceGeo'];
                    $uceCRE = $_POST['uceCRE'];
                    $uceEng = $_POST['uceEng'];
                    $optSubject1 = $_POST['optSubject1'];
                    $optSubject1Grade = $_POST['optSubject1Grade'];
                    $optSubject2Grade = $_POST['optSubject2Grade'];
                    //Medical
                    $medicalProblemDesc = $_POST['medicalProblemDesc'];
                    if (isset($_FILES['imagePic'])) {
                        $errors = array();
                        $file_name = $_FILES['imagePic']['name'];
                        $file_size = $_FILES['imagePic']['size'];
                        $file_tmp = $_FILES['imagePic']['tmp_name'];
                        $file_type = $_FILES['imagePic']['type'];
    
                        $extensions = array("jpeg", "jpg", "png");
    
                        if ($file_type != 'image/jpeg') {
                            $errors = "extension not allowed, please choose a JPEG or PNG file.";
                            echo $errors;
                        }
    
                        if ($file_size > 2097152) {
                            $errors[] = 'File size must be excately 2 MB';
                            echo $errors;
                        }
                        $date = date('Hms');
                        $newFilename = trim($fullName . '.jpg');
                        //echo $newFilename;
    
                        if (empty($errors) == true) {
                            move_uploaded_file($file_tmp, "../img/stdphotos/" . $newFilename);
                        } else {
                            echo "Image Upload Failed. Please Try Again";
                        }
                    }
                    $dataBiodata = array(
                        'student_no' => $studentNo,
                        'admission_no' => $admissionNo,
                        'sname' => $sname,
                        'oname' => $oname,
                        'gender' => $gender,
                        'nationality' => $nationality,
                        'student_type' => $student_type,
                        'house' => $house,
                        'class' => $class,
                        'fname' => $fname,
                        'religion' => $religion,
                        'residence' => $residence,
                        'dob' => $dob,
                        'date_joined' => $date_joined,
                        'origin' => $origin,
                        'section' => $section,
                        'photoname' => $newFilename,
                    );
                    $fieldsBiodata = array_keys($dataBiodata);
                    $insertBiodata = "INSERT INTO biodata (`" . implode('`,`', $fieldsBiodata) . "`) VALUES('" . implode("','", $dataBiodata) . "')";
                    include "core.inc.php";
                    $resultBiodata = mysqli_query($con, $insertBiodata);
                    if ($resultBiodata) {
                        //Parent Insert
                        $dataParent = array(
                            'sname' => $psname,
                            'phone_1' => $pphone_1,
                            'fname' => $fpname,
                            'gender' => $pgender,
                            'phone_2' => $pphone_2,
                            'oname' => $poname,
                            'email' => $pemail,
                            'residence' => $presidence,
                            'biodata_student_no' => $studentNo,
                        );
                        $fieldsParent = array_keys($dataParent);
                        $insertParent = "INSERT INTO parent (`" . implode('`,`', $fieldsParent) . "`) VALUES('" . implode("','", $dataParent) . "')";
                        include "core.inc.php";
                        $resultParent = mysqli_query($con, $insertParent);
                        //NOK Insert
                        $dataNok = array(
                            'sname' => $n_sname,
                            'phone_1' => $n_phone_1,
                            'fname' => $n_fname,
                            'phone_2' => $n_phone_2,
                            'email' => $n_email,
                            'biodata_student_no' => $studentNo,
                        );
                        $fieldsNok = array_keys($dataNok);
                        $insertNok = "INSERT INTO nok (`" . implode('`,`', $fieldsNok) . "`) VALUES('" . implode("','", $dataNok) . "')";
                        include "core.inc.php";
                        $resultNok = mysqli_query($con, $insertNok);
                        //Former School Insert
                        $sql_1 = "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '" . $prevsch1 . "', '" . $prevsch1Qual . "', '" . $prevsch1Period . "', '" . $studentNo . "')";
                        $resultsql_1 = mysqli_query($con, $sql_1);
    
                        $sql_2 = "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '" . $prevsch2 . "', '" . $prevsch2Qual . "', '" . $prevsch2Period . "', '" . $studentNo . "')";
                        $resultsql_2 = mysqli_query($con, $sql_2);
    
                        $sql_3 = "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '" . $prevsch3 . "', '" . $prevsch3Qual . "', '" . $prevsch3Period . "', '" . $studentNo . "')";
                        $resultsql_3 = mysqli_query($con, $sql_3);
                        //PLE Results
                        $insertPLE = "INSERT INTO `pleresult` (`id`, `indexNo`,`schoolName`,`eng`, `sci`, `sst`, `math`, `student_no`) VALUES ('', '" . $pleIndexNo . "', '" . $schNameple . "',  '" . $pleEng . "', '" . $pleSci . "','" . $pleSST . "','" . $pleMath . "' ,'" . $studentNo . "')";
                        $resultPLE = mysqli_query($con, $insertPLE);
    
                        //UCE 
                        $dataUCE = array(
                            'indexNo' => $uceIndexNo,
                            'phy' => $ucePhy,
                            'chem' => $uceChem,
                            'bio' => $uceBio,
                            'math' => $uceMath,
                            'hist' => $uceHist,
                            'geo' => $uceGeo,
                            'cre' => $uceCRE,
                            'eng' => $uceEng,
                            'opt1' => $optSubject1,
                            'opt2' => $optSubject2,
                            'mark' => $optSubject1Grade,
                            'mark2' => $optSubject2Grade,
                            'student_no' => $studentNo
                        );
                        $fieldsUCE = array_keys($dataUCE);
                        $insertUCE = "INSERT INTO uceresults (`" . implode('`,`', $fieldsUCE) . "`) VALUES('" . implode("','", $dataUCE) . "')";
                        $resultUCE = mysqli_query($con, $insertUCE);
                        //Medical Problem
                        $insertMedical = "INSERT INTO `mediclproblem` (`medicalProblem`, `biodata_student_no`) VALUES ('" . $medicalProblemDesc . "', '" . $studentNo . "')";
                        $resultMedical = mysqli_query($con, $insertMedical);
                        echo '<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="glyphicon glyphicon-ok"></i> Data Successfully Captured
                    </div>';
                    } else {
                        echo '<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="glyphicon glyphicon-alert"></i> Operation Failed
                        </div>';
                     //   echo "error" . mysqli_error($con);
                    }
                }
          
            ?>
            <div class="panel panel-default" class="col-lg-4">
                <div class="panel-heading" style="background-color:#337ab7;"> 
                    <div style="color:#FFF;"> <i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#demo"></i>Personal Details</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;"  id="demo" class="collapse">
                    <div class="row">
                        <form method="post" role="form" enctype="multipart/form-data">
                            <div class="col-lg-3" style="margin:2%;">
                                <img src="../img/user-avatar.png" width="200" height="200" />
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Upload Photo</label>
                                        <input type = "file" name="imagePic">
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Admission Number</label><sup>*</sup>
                                    <input class="form-control" placeholder="14/D/223" name="admission_no">
                                </div>
                                <label>Surname</label><sup>*</sup>
                                <input class="form-control" placeholder="Surname" name="sname">
                                <label>Othernames</label>
                                <input class="form-control" placeholder="Othernames" name="oname">  
                                <label>Gender</label><sup>*</sup>
                                <select class="form-control" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>  
                                <label>Country Of Origin</label><sup>*</sup>
                                <select class="form-control" name="nationality">
                                    <option>Uganda</option>
                                    <option>Kenya</option>
                                    <option>Tanzania</option>
                                    <option>Rwanda</option>
                                    <option>Burundi</option>
                                </select>  
                                <label>Student Type</label><sup>*</sup>
                                <select class="form-control" name="student_type">
                                    <option>Current</option>
                                    <option>Former</option>
                                </select>
                                <label>House</label>
                                <input class="form-control" placeholder="House" name="house">    
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Class</label><sup>*</sup>
                                    <select class="form-control" name="class">
                                        <option>Senior One</option>
                                        <option>Senior Two</option>
                                        <option>Senior Three</option>
                                        <option>Senior Four</option>
                                        <option>Senior Five</option>
                                        <option>Senior Six</option>
                                    </select>
                                    <label>Firstname</label><sup>*</sup>
                                    <input class="form-control" placeholder="Firstname" name="fname">  
                                    <label>Religion</label><sup>*</sup>
                                    <select class="form-control" name="religion">
                                        <option>Roman Catholic</option>
                                        <option>Anglican</option>
                                        <option>Moslem</option>
                                        <option>Other</option>               
                                    </select> 
                                    <label>Residence</label><sup>*</sup>
                                    <input class="form-control" placeholder="Residence" name="residence">  
                                    <label>Section</label><sup>*</sup>
                                    <select class="form-control" name="section">
                                        <option>Boarding</option>
                                        <option>Day</option>
                                    </select> 
                                    <label for="example-datetime-local-input" class="">Date of Birth</label>
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="dob">

                                    <label for="example-datetime-local-input" class="">Date Joined</label>
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_joined">                       
                                </div>

                            </div>
                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337ab7;">
                    <div style="color:#FFF;" ><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#Parent"></i>Parent</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;" id="Parent" class="collapse">
                    <div class="row">
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Surname</label><sup>*</sup>
                                <input class="form-control" name="psname">  
                                <label>Country of Origin </label>
                                <select class="form-control" name="porigin">
                                    <option>Uganda</option>
                                    <option>Kenya</option>
                                    <option>Tanzania</option>
                                    <option>Rwanda</option>
                                    <option>Burundi</option>
                                </select>
                                <label>Phone Number 1</label><sup>*</sup>
                                <input class="form-control" placeholder="0777-000000" name="pphone_1">                         
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Firstname</label><sup>*</sup>
                                <input class="form-control" name="fpname">  
                                <label>Father/Mother</label><sup>*</sup>
                                <select class="form-control" name="pgender">
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>Guardian</option>
                                </select>
                                <label>Phone Number 2</label>
                                <input class="form-control" placeholder="0700-000000" name="pphone_2">                         
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Othernames</label>
                                <input class="form-control" name="poname">  
                                <label>Residence</label>
                                <input class="form-control" name="presidence">  
                                <label>Email</label>
                                <input class="form-control" placeholder="example@sco.com" name="pemail">  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337ab7;">
                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#nok"></i>Next of Kin</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;" id="nok" class="collapse">
                    <div class="row">
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Surname</label><sup>*</sup>
                                <input class="form-control" name="n_sname">  

                                <label>Phone Number 1</label><sup>*</sup>
                                <input class="form-control" placeholder="0777-000000" name="n_phone_1">                         
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Firstname</label><sup>*</sup>
                                <input class="form-control" name="n_fname">  

                                <label>Phone Number 2</label>
                                <input class="form-control" placeholder="0700-000000" name="n_phone_2">                         
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Othernames</label>
                                <input class="form-control" name="n_oname">  

                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="example@sco.com" name="n_email">  

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337ab7;">

                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#academic" aria-expanded="false"></i>Academic Background</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;" id="academic" class="collapse">
                    <div class="row">

                        <div class="col-lg-12">
                            <p><strong><u> Previous Schools Attended</u></strong></p>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>School Name</label>
                                <input class="form-control" name="prevsch1"> 
                                <label></label>  
                                <input class="form-control" name="prevsch2"> 
                                <label></label>        
                                <input class="form-control" name="prevsch3">                   
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Year</label><sup>*</sup>
                                <input class="form-control" name="prevsch1Period" placeholder = 'Example: 2012-2013'>  
                                <label></label> 
                                <input class="form-control" name="prevsch2Period" placeholder = 'Example: 2012-2013'>  
                                <label></label> 
                                <input class="form-control" name="prevsch3Period" placeholder = 'Example: 2012-2013'>  
                            </div>

                        </div>
                        <div class="col-lg-2">

                            <div class="form-group">
                                <label>Qualification</label>
                                <input class="form-control" name="prevsch1Qual" placeholder = 'Example: UCE'> 
                                <label></label> 
                                <input class="form-control" name="prevsch2Qual" placeholder = 'Example: UCE'> 
                                <label></label> 
                                <input class="form-control" name="prevsch3Qual" placeholder = 'Example: UCE'>                      
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"  href="#collapseOne" aria-expanded="false" class=""><i class="glyphicon glyphicon-menu-down"></i>PLE Results</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                                <div class="panel-body">


                                    <div class="form-group">
                                        <label>Index No.</label>

                                        <input class="form-control" name="pleIndexNo"> 
                                        <label>School Name</label>

                                        <input class="form-control" name="schNameple"> 

                                        <label>English</label>

                                        <input class="form-control" name="pleEng"> 

                                        <label>Math</label>  
                                        <input class="form-control" name="pleMath"> 
                                        <label>Science</label>        
                                        <input class="form-control" name="pleSci">   
                                        <label>Social Studies</label>        
                                        <input class="form-control" name="pleSST"> 
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#uce" aria-expanded="true" class=""><i class="glyphicon glyphicon-menu-down"></i>UCE Results</a>
                                </h4>
                            </div>
                            <div id="uce" class="panel-collapse collapse in" aria-expanded="true" style="">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label>UCE Index No.</label>
                                        <input class="form-control" name="uceIndexNo."> 
                                        <div class="col-lg-4">
                                            <label>Physics</label>
                                            <input class="form-control" name="ucePhy"> 
                                            <label>Chem</label>  
                                            <input class="form-control" name="uceChem"> 
                                            <label>Biology</label>        
                                            <input class="form-control" name="uceBio">   
                                            <label>Math</label>        
                                            <input class="form-control" name="uceMath"> 

                                        </div>    
                                        <div class="col-lg-4">
                                            <label>History</label>

                                            <input class="form-control" name="uceHist"> 

                                            <label>Geography</label>  
                                            <input class="form-control" name="uceGeo"> 
                                            <label>CRE</label>        
                                            <input class="form-control" name="uceCRE">   
                                            <label>English</label>        
                                            <input class="form-control" name="uceEng"> 

                                        </div>  
                                        <div class="col-lg-4">
                                            <label>Optional Subject</label>

                                            <input class="form-control" name="optSubject1" placeholder = "Example:Art"> 

                                            <label>Grade</label>  
                                            <input class="form-control" name="optSubjectGrade1" placeholder ="Example:D1"> 
                                            <label>Optional Subject</label>        
                                            <input class="form-control" name="optSubject2" placeholder = "Example:Computer">   
                                            <label>Mark</label>        
                                            <input class="form-control" name="optSubject2Grade" placeholder = "Example:D2"> 
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337ab7;">

                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down" style="color:White;" data-toggle="collapse" data-target="#medical" aria-expanded="false"></i>Medical Information</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;" id="medical">
                    <div class="row">
                        <form method="post" role="form">
                            <div class="col-lg-12">
                                <p><strong><u>Does the Student have any Medical problems?</u></strong><input type="checkbox" value="medicalProblem"></p>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label>If Yes, describe the medical problem.</label>
                                    <textarea style="margin: 0px; width: 343px; height: 121px;" name = "medicalProblemDesc"></textarea>             
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-success pull-right" style="margin-top: 25px;" name="saveUser">Save</button>
            </form> 


    <?php
}

function InEntry() {
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">::Examination Results Entry/Subject Marksheet</h2>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <form method ="post" role = "form">
                                <label >Class</label>
                                <select class="form-control class" name= "class">
                                    <option value="">--Select--</option>
                                    <option value="Senior One" class="class">Senior One</option>
                                    <option value="Senior Two">Senior Two</option>
                                    <option value="Senior Two">Senior Three</option>
                                    <option value="Senior Four">Senior Four</option>
                                </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Term</label>
                            <select class="form-control term" name ="term">
                                <option value="">--Select--</option>
                                <option value="Term One">Term One</option>
                                <option value="Term Two">Term Two</option>
                                <option value="Term Three">Term Three</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label >Year</label>
                            <select class="form-control year" name = "year">
                                <option value="">--Select--</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Type</label>
                            <select class='form-control exam' required='required' name='exam_type'>
                                <option value = "">--Select--</option>
    <?php
    include "core.inc.php";
    $sql = mysqli_query($con, "SELECT * FROM exam_types");
    if ($sql) {
        echo "Yes";
    } else {
        echo "Error" . mysqli_error($con);
    }
    while ($row = mysqli_fetch_array($sql)) {
        ?>
                                    <option id ="<?php echo $row['id']; ?>"><?php echo $row['exam_name']; ?></option>
                                    <?php
                                }
                                ?>                                                   
                            </select>

                        </div>
                        <div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-primary" style="margin-top:6px;">
                                <div class="panel-heading">
                                    Enter Marks 
                                    <label class="pull-right">Student:</label>
                                    <select class='pull-right student' required='required' style = "color:black"  name = "stdname">
                                        <option value = "">--Select--</option>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM biodata WHERE sname != '' ");
    while ($row = mysqli_fetch_array($sql)) {
        $sname = strtoupper($row['sname']);
        ?>
                                        
                                            <option value="<?php echo $row['student_no']; ?>"><?php echo $sname . " " . $row['fname'] ?></option>
                                            <?php
                                        }
                                        ?>                                                   
                                    </select>
                                   
                                    
                                </div>
                                <div class="panel-body">

                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" id="checkbox">Consider No. of Papers
                                                </label>
                                            </div>
                                            <input type = "hidden" value="" name = "papersStatus" class="papersStatus">
                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <table border="0" width="110%" class="table-striped">
                                                <thead style="border-bottom:2px solid black;margin-bottom:3px;">
                                                    <tr style="font-weight:bold;" id="marksHead">
                                                        <td>Subject</td>
                                                        <td id ="papers">P1</td>
                                                        <td id ="papers">P2</td>
                                                        <td id ="papers">P3</td>
                                                        <td id ="papers">P4</td>
                                                        <td class ="enterFinalM">Final Mark</td>
                                                    </tr>
                                                </thead>
                                                <tbody>


    <?php
    $sql = mysqli_query($con, "SELECT * FROM subjects WHERE sub_name != '' ");
    $i = 1;
    while ($row = mysqli_fetch_assoc($sql)) {
        $sub_name = ucfirst($row['sub_name']);
        $sub_code = ucfirst($row['sub_code']);
        $id = $row['id'];
        
       // echo $id;
       // echo "<pre>";
      //  print_r($row);
       // echo "</pre>";
        echo "
                                                            <tr>
                                                            <td>$sub_code  $sub_name</td>
                                                            <td><input type='text' style='width:42px;' class='form-control subinput' name='".$id."p1'></td>
                                                            <td><input type='text' style='width:42px;' class='form-control subinput' name='".$id."p2'></td>
                                                            <td><input type='text' style='width:42px;' class='form-control subinput' name='".$id."p3'></td>
                                                            <td><input type='text' style='width:42px;' class='form-control subinput' name='".$id."p4'></td>
                                                            <td><input type='text' style='width:42px;' class='form-control finalMark' name='".$id."finalMark'></td>
                                                            </tr>
                                                            ";
                                                            $i++;
    }

    $num = mysqli_num_rows($sql);
    
    if (isset($_POST['insertMarks'])) {
        
        $year = $_POST['year'];
        $class = $_POST['class'];
        $term = $_POST['term'];
        $type = $_POST['type'];
        $considerPapers = $_POST['papersStatus'];
        $hiddenName = $_POST['hiddenName'];
        $sql = mysqli_query($con, "SELECT * FROM subjects WHERE sub_name != '' ");
        $i = 1;
        while ($row = mysqli_fetch_array($sql)) {
            $sub_name = ucfirst($row['sub_name']);
            $sub_code = ucfirst($row['sub_code']);
            $noPapers = $row['noPapers'];
            $p1 = $_POST[''.$i.'p1'];
            $p2 = $_POST[''.$i.'p2'];
            $p3 = $_POST[''.$i.'p3'];
            $p4 = $_POST[''.$i.'p4'];
            if (is_numeric($p1) && is_numeric($p2) && is_numeric($p3) && is_numeric($p4)) { 
            $finalScore = $_POST[''.$i.'finalMark'];
            switch($considerPapers){
                case "yes": 
                $finalMark =  round(($p1 + $p2 + $p3 + $p4)/$noPapers);
                $gradeT = test_grade($finalScore);
                break;
                case "no": 
                $finalMark = $finalScore;
                $gradeT = test_grade($finalScore);
                break;
            }
        } else {
            echo "";
          }
          $ins = "INSERT INTO `exam_result` (`exam_result_no`, `examCode`, `subject_name`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `final_score`,`grade`, `entrydate`, `biodata_student_no`, `term`, `year`, `class`, `termPart`, `enteredBy`) VALUES (NULL,'" . $sub_code . "', '" . $sub_name . "', '" . $p1 . "', '" .  $p2. "', '" . $p3 . "', '" .  $p4 . "', NULL, NULL,'".$finalMark."','".$gradeT."',NULL, '".$hiddenName."', '".$term."', '".$year."', '".$class."', '".$type."', NULL) ";
            $run = mysqli_query($con, $ins);
            $i++;
        }
        if (!$run){
            
            echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Operation Failed!</h4>
            
          </div>'.mysqli_error($con);
        }else{
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Operation Successful</h4>
                   </div>';
        }
    }

    ?>

                                                </tbody>
                                            </table>

                                        </div>    

                                    </div>                        </div>
                                <div class="panel-footer">
                                    <input type = "hidden" value = "" class="hiddenName" name="hiddenName">
                                    <button class="btn btn-primary pull-right btnEnterMarks" name="insertMarks"> Submit Marks</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>




    <?php
}
function MarksEntryStudent() {
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">::Examination Results Entry/Bulk</h2>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <form method ="post" id="bulkEntryForm" role = "form">
                                <label >Class</label>
                                <select class="form-control class" name= "class">
                                    <option value="">--Select--</option>
                                    <option value="Senior One" class="class">Senior One</option>
                                    <option value="Senior Two">Senior Two</option>
                                    <option value="Senior Two">Senior Three</option>
                                    <option value="Senior Four">Senior Four</option>
                                </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Term</label>
                            <select class="form-control term" name ="term">
                                <option value="">--Select--</option>
                                <option value="Term One">Term One</option>
                                <option value="Term Two">Term Two</option>
                                <option value="Term Three">Term Three</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label >Year</label>
                            <select class="form-control year" name = "year">
                                <option value="">--Select--</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Type</label>
                            <select class='form-control exam' required='required' name='exam_type'>
                                <option value = "">--Select--</option>
                                    <?php
                                    include "core.inc.php";
                                    $sql = mysqli_query($con, "SELECT * FROM exam_types");
                                    if ($sql) {
                                        echo "Yes";
                                    } else {
                                        echo "Error" . mysqli_error($con);
                                    }
                                    while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                    <option id ="<?php echo $row['id']; ?>"><?php echo $row['exam_name']; ?></option>
                                    <?php
                                }
                                ?>                                                   
                            </select>

                        </div>
                        <div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-primary" style="margin-top:6px;">
                                <div class="panel-heading">
                                    Enter Marks <b class="stdName"></b>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <table border="0" width="110%" class="table-striped">
                                                <thead style="border-bottom:2px solid black;margin-bottom:3px;">
                                                <tr style="font-weight:bold;">
                                                <td>Subject</td>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM subjects");
                                                    $headings = array();
                                                    $size = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        $short = strtoupper($row['short']);
                                                        ?>
                                                        <td><?php echo $short ?></td>
                                                    <?php 
                                                    }
                                                    ?>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sql = mysqli_query($con, "SELECT * FROM biodata WHERE sname != '' ");
                                                $num = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    $sname = strtoupper($row['sname']);
                                                    $fname = ucfirst($row['fname']);
                                                    $student_no = ucfirst($row['student_no']);
                                                    echo "<tr><td>$sname  $fname</td>";
                                                    $i = 0;
                                                    while ($i < $size){
                                                        $name = $student_no."-".$headings[$i];
                                                        echo "<td><input type='text'  name='".$name."' class='form-control bulk-form-control-input' style='width:42px;'></td>";
                                                        $i++;
                                                    }
                                                    echo "</tr>";                
                                                }
                                                    if (isset($_POST['insertMarks'])) {
                                                    
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>

                                        </div>    

                                    </div>                        </div>
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right " id="bulkEntrySubmit" name="insertMarks"> Submit Marks</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>




    <?php
}

function BulEntry() {
    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">::Examination Results Entry/Subject Marksheet</h2>

                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-primary" style="border:3px solid #337ab7;" >

                                <div class="panel-heading" style="padding:0px;" >
                                    Individual Mark Entry
                                </div>
                                <div style="padding-top: 3px;">

                                    <label>Class</label>
                                    <select style="width:200px;padding:5px;">
                                        <option>Math</option>
                                        <option>Math</option>
                                        <option>Math</option>
                                    </select >

                                    <label>Term</label>
                                    <select style="width:150px;padding:5px;">
                                        <option>Math</option>
                                        <option>Math</option>
                                        <option>Math</option>
                                    </select>
                                    <label>Name</label>
                                    <select style="width:250px;padding:5px;" >
                                        <option>Math</option>
                                        <option>Math</option>
                                        <option>Math</option>
                                    </select>


                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <table class="table-bordered" style="width: 100%; border:3px solid #337ab7;">
                                <thead style="background-color: #337ab7;color:#FFF;align: center;">
                                <th>Name</th>
                                <th>Phy</th>
                                <th>Chem</th>
                                <th>Math</th>
                                <th>Bio</th>
                                <th>Hist</th>
                                <th>Geo</th>
                                <th>Ent</th>
                                <th>Comm</th>
                                <th>Comp</th>
                                <th>Art</th>
                                <th>Comp</th>
                                <th>Comp</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.Kalunu Geofery</td> 
                                        <td>45</td>    
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                        <td>45</td> 
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>

    <?php
}

function selectEntry() {
    ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">::Examination Results Entry</h2>

                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-4" >
                                <div style="margin-bottom:5px;font-weight:bold;text-align:left;">Please select Entry Mode</div><br>
                                <a href="?result=enter"> <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Individual Entry</button> </a>
                               
                                <a href="?result=bulk"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bulk Entry</button></a>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-2">
    <?php
}
function selectReport() {
    ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">::Examination Results Report</h2>

                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-4" >
                                <div style="margin-bottom:5px;font-weight:bold;text-align:left;">Please select Entry Mode</div><br>
                                <a href="?marksheet=individual"> <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Individual Entry</button> </a>
                               
                                <a href="?marksheet=general"><button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bulk Entry</button></a>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-2">
    <?php
}
function success($page) {
    ?>
                                    <div class="" style="border-top:5px solid #00004d;border-bottom:5px solid #00004d;border-radius: 5px; width: 30%; margin-left:35%; margin-top: 2%;padding: 0%;">
                                        <strong><h3 align="center"><i class="glyphicon glyphicon-check" ></i>&nbspOperation Successful </h3></strong></h2>

                                        <a href='<?php echo $page ?>'><center>Click here to go back</center></a>.
                                    </div>
    <?php
}

function error() {
    ?>
                                    <div style="border-top:5px solid #00004d;border-bottom:5px solid #00004d;border-radius: 5px; width: 30%; margin-left:35%; margin-top: 2%;padding: 0%;">
                                        <strong><h3 align="center"><i class="glyphicon glyphicon-exclamation-sign"></i>Operation Not Successful </h3></strong></h2>


                                        <center><a href="<?php echo $page ?>">Click here to go back</a>.</center> 
                                    </div>
    <?php
}

function pagenotfound() {
    ?>
                                    <div style="border-top:5px solid #00004d;border-bottom:5px solid #00004d;border-radius: 5px; width: 30%; margin-left:35%; margin-top: 2%;padding: 0%;">
                                        <strong><h3 align="center"><i class="glyphicon glyphicon-exclamation-sign">404</i>Page not found</h3></strong></h2>


                                        <center><a href="<?php echo $page ?>">Click here to go back</a>.</center> 
                                    </div>
    <?php
}

function view($viewpar) {
    //view student biodata
    $query = "SELECT * FROM  biodata WHERE student_no='" . $viewpar . "'";
    include "../php/core.inc.php";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($query_run);
    $admission_no = $row['admission_no'];
    $student_no = $row['student_no'];
    $fname = ucfirst($row['fname']);
    $sname = $row['sname'];
    $oname = $row['oname'];
    $name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
    $date_of_birth = $row['dob'];
    $residence = $row['residence'];
    $section = $row['section'];
    $date_joined = $row['date_joined'];
    $house = $row['house'];
    $student_type = $row['student_type'];
    $nationality = $row['nationality'];
    $gender = $row['gender'];
    $religion = $row['religion'];
    $origin = $row['religion'];
    $residence = $row['residence'];
    $dob = $row['dob'];
    $classTr = $row['classteacher'];
    $photo = $row['photoname'];
    ?>
                                    <!-- Modal -->
                                    <div class ="row">
                                        <div class="col-lg-12">
                                            <h2 class="page-header">::Student</h2>
                                        </div>
                                        <div class="col-lg-12" style="margin-bottom:5px;margin-left:65%;" class="pull-left">
                                            <a href ="" class="btn btn-primary btn-sm" ><i class="glyphicon glyphicon-print"></i>&nbsp;|&nbsp;Print</a>
                                            <a href ="?update=<?php echo $student_no ?>" class="btn btn-warning btn-sm updatebio" id = "updatebio" ><i class="glyphicon glyphicon-edit"></i>&nbsp;|&nbsp;Update</a>
                                            <a href ="" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;|&nbsp;Promote</a>
                                            <a href ="" class="btn btn-danger btn-sm" ><i class="glyphicon glyphicon-thumbs-down"></i> &nbsp;|&nbsp;Demote</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="panel panel-primary" style="margin:auto;" >
                                                <div class="panel-heading">
    <?php echo $name; ?>
                                                </div>
                                                <div class="panel-body" style="border:0px solid #FFF;">
                                                    <div class="col-lg-3">
                                                        <center>
    <?php
    if (!empty($photo)) {
        echo '<img style="width:145px;height:173px;"src="../img/stdphotos/' . $photo . '">';
    } else {
        echo '<img style="width:145px;height:1173px;"src="../img/stdphotos/default.png">';
    }
    ?>

                                                            <h5 style="color:">Student No:<strong> &nbsp&nbsp&nbsp<?php echo $student_no; ?></strong></h5>
                                                            <h5 style="color:">Reg No:<strong> &nbsp&nbsp&nbsp<?php echo $admission_no; ?></strong></h5>
                                                        </center>
                                                    </div>
                                                    <div class = "col-lg-8">

                                                        <table border="0" width="110%" class="table-striped">
                                                            <tr>
                                                                <td>Firstname</td>
                                                                <td><strong><?php echo $fname; ?> </strong></td>
                                                                <td>Nationality</td>
                                                                <td><strong><?php echo $nationality; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Surname</td>
                                                                <td><strong><?php echo $sname; ?></strong></td>
                                                                <td>Student Type</td>
                                                                <td><strong><?php echo $student_type; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Othernames</td>
                                                                <td><strong><?php echo $oname; ?></strong></td>
                                                                <td>Date Joined</td>
                                                                <td><strong><?php echo $date_joined; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date Of Birth</td>
                                                                <td><strong><?php echo $dob; ?></strong></td>
                                                                <td>House</td>
                                                                <td><strong><?php echo $house; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Age</td>
                                                                <td><strong><?php echo 21; ?></strong></td>
                                                                <td>Section</td>
                                                                <td><strong><?php echo $section; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td><strong><?php echo $gender; ?></strong></td>
                                                                <td>Religion</td>
                                                                <td><strong><?php echo $religion; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Residence</td>
                                                                <td><strong><?php echo $residence; ?></strong></td>
                                                                <td>Class Teacher</td>
                                                                <td><strong><?php echo $classTr ?></strong></td>
                                                            </tr>

                                                        </table>
                                                    </div>
    <?php
    //view parent
    $query = "SELECT * FROM  parent WHERE biodata_student_no='" . $viewpar . "'";
    include "../php/core.inc.php";
    $query_run = mysqli_query($con, $query);
    if (!$query_run) {
        echo "Query_Run_Error" . mysqli_error($con);
    } else {
        while ($row = mysqli_fetch_array($query_run)) {

            $p_parent_no = $row['parent_no'];
            $p_fname = ucfirst($row['fname']);
            $p_sname = ucfirst($row['sname']);
            $p_oname = ucfirst($row['oname']);
            $p_name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
            $p_phone_no_1 = $row['phone_1'];
            $p_phone_no_2 = $row['phone_2'];

            $p_residence = $row['residence'];
            $p_email = $row['email'];
            $p_origin = $row['origin'];
            $p_gender = $row['gender'];
        }
        ?>
                                                        <div class="col-lg-11">
                                                            <div data-toggle="collapse" data-target="#demo" style="border-bottom: 4px solid #337ab7;border-radius: 5px;"><h5 style="color:#337ab7;"><i class="fa fa-user"></i>&nbspParent</h5></div>

                                                            <div id="demo" class="collapse">
                                                                <table border="0" width="110%" class="table-striped">

                                                                    <tr>
                                                                        <td>Parent's Name</td>
                                                                        <td><strong><?php echo $p_name; ?></strong>
                                                                        <td>Phone Number (1)</td>
                                                                        <td><strong><?php echo $p_phone_no_1; ?></strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Residence</td>
                                                                        <td><strong><?php echo $p_residence; ?></strong></td>
                                                                        <td>Phone Number (2)</td>
                                                                        <td><strong><?php echo $p_phone_no_2; ?></strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gender</td>
                                                                        <td><strong><?php echo $p_gender; ?></strong></td>
                                                                        <td>Email</td>
                                                                        <td><strong><?php echo $p_email; ?></strong></td>
                                                                    </tr>
                                                            </div>
                                                            </table>

                                                        </div>
                                                    </div>
        <?php
        //view 
        $query_1 = "SELECT * FROM nok WHERE biodata_student_no='" . $viewpar . "'";
        include "../php/core.inc.php";
        $query_run_1 = mysqli_query($con, $query_1);
        if (!$query_run_1) {
            echo "Query_Run_Error" . mysqli_error($con);
        } else {
            while ($row = mysqli_fetch_array($query_run_1)) {
                $n_nok_no = $row['nok_no'];
                $n_fname = $row['fname'];
                echo $n_fname;
                $n_sname = $row['sname'];
                $n_oname = $row['oname'];
                $n_name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
                echo $n_name;
                $n_phone_no_1 = $row['phone_1'];
                $n_phone_no_2 = $row['phone_2'];

                $n_residence = $row['residence'];
                $_email = $row['email'];
                $p_origin = $row['origin'];
                $p_gender = $row['gender'];
            }
        }
        ?>
                                                    <div class="col-lg-11">
                                                        <div data-toggle="collapse" data-target="#nok" style="border-bottom: 4px solid #337ab7;border-radius: 5px;" ><h5 style="color:#337ab7;"><i class="fa fa-users"></i>&nbspNext Of Kin </h5></div>

                                                        <div id="nok" class="collapse">
                                                            <table border="0" width="110%" class="table-striped">
                                                                <tr>
                                                                    <td>NOK's Name</td>
                                                                    <td><strong><?php echo $n_name; ?></strong></td>
                                                                    <td>Phone Number (1)</td>
                                                                    <td><strong><?php echo $n_phone_no_1; ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Residence</td>
                                                                    <td><strong><?php echo $n_residence; ?></strong></td>
                                                                    <td>Phone Number (2)</td>
                                                                    <td><strong><?php echo $n_phone_no_2; ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gender</td>
                                                                    <td><strong><?php echo $n_gender; ?></strong></td>
                                                                    <td>Email</td>
                                                                    <td><strong><?php echo $n_email; ?></strong></td>
                                                                </tr>
                                                        </div>

                                                        </table>

                                                    </div>
                                                </div>
                                                <!--endTable-->
                                                <div class="col-lg-11">
                                                    <div data-toggle="collapse" data-target="#academics" style="border-bottom: 4px solid #337ab7;border-radius: 5px;"><h5 style="color:#337ab7;"><i class="glyphicon glyphicon-education"></i>Academics</h5></div>

                                                    <div id="academics" class="collapse">
                                                        <table border="0" width="110%" class="table-striped">

                                                            <tr>
                                                                <td>Parent's Name</td>
                                                                <td><strong><?php echo $fname; ?></strong></td>
                                                                <td>Phone Number </td>
                                                                <td><strong><?php echo $nationality; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Residence</td>
                                                                <td><strong><?php echo $sname; ?></strong></td>
                                                                <td>Email</td>
                                                                <td><strong><?php echo $student_type; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td><strong><?php echo $oname; ?></strong></td>
                                                                <td>Nationality</td>
                                                                <td><strong><?php echo $date_joined; ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number</td>
                                                                <td><strong><?php echo $dob; ?></strong></td>
                                                                <td>Phone Number</td>
                                                                <td><strong><?php echo $house; ?></strong></td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>


                                        <!-- /.col-lg-4 -->
                                    </div>


                                </div>

                            </div>

        <?php
    }
}

function edit($viewpar) {
    //view student biodata
    $query = "SELECT * FROM  biodata WHERE student_no='" . $viewpar . "'";
    include "../php/core.inc.php";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($query_run);
    $admission_no = $row['admission_no'];
    $get_student_no = $row['student_no'];
    $fname = ucfirst($row['fname']);
    $sname = $row['sname'];
    $oname = $row['oname'];
    $name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
    $date_of_birth = $row['dob'];
    $residence = $row['residence'];
    $section = $row['section'];
    $date_joined = $row['date_joined'];
    $house = $row['house'];
    $student_type = $row['student_type'];
    $nationality = $row['nationality'];
    $gender = $row['gender'];
    $religion = $row['religion'];
    $origin = $row['religion'];
    $residence = $row['residence'];
    $dob = $row['dob'];
    $classTr = $row['classteacher'];
    ?>
                        <!-- Modal -->
                        <div class ="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">::Student</h2>

                            </div>
                            <div class="col-lg-12">

                                <div class="panel panel-primary" style="margin:auto;" >
                                    <div class="panel-heading">
    <?php echo $name; ?>
                                    </div>
                                    <div class="panel-body" style="border:0px solid #FFF;">
                                        <div class="col-lg-3">
                                            <center>
                                                <img src="../img/man3.png" style="width:145px;height:173px;">
                                                <h5 style="color:">Student No:<strong> &nbsp&nbsp&nbsp<?php echo $get_student_no; ?></strong></h5>
                                                <h5 style="color:">Reg No:<strong> &nbsp&nbsp&nbsp<?php echo $admission_no; ?></strong></h5>
                                            </center>
                                        </div>
                                        <div class = "col-lg-8">
                                            <div style="margin-left: 100%;" >
                                                <a href ="?update=<?php $get_student_no; ?>">
                                                    <i class="fa fa-check">Save</i>
                                                </a>
                                            </div>
                                            <table border="0" width="110%" class="table-striped">
                                                <tr>
                                                    <td>Firstname</td>
                                                    <td><strong><input type="text" name="fname" id="edit" value="<?php echo $fname; ?>"> </strong></td>
                                                    <td>Nationality</td>
                                                    <td><strong><input type="text" name="nationality" value="<?php echo $nationality; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Surname</td>
                                                    <td><strong><input type="text" name="name" value="<?php echo $sname; ?>"></strong></td>
                                                    <td>Student Type</td>
                                                    <td><strong><input type="text" name="student_type" value="<?php echo $student_type; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Othernames</td>
                                                    <td><strong><input type="text" name="oname" value="<?php echo $oname; ?>"></strong></td>
                                                    <td>Date Joined</td>
                                                    <td><strong><input type="text" name="date_joined" value="<?php echo $date_joined; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Birth</td>
                                                    <td><strong><input type="text" name="dob" value="<?php echo $dob; ?>"></strong></td>
                                                    <td>House</td>
                                                    <td><strong><input type="text" name="house" value="<?php echo $house; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Age</td>
                                                    <td><strong><input type="text" name="age" value="<?php echo $age; ?>"></strong></td>
                                                    <td>Section</td>
                                                    <td><strong><input type="text" name="fname" value="<?php echo $fname; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><strong><input type="text" name="gender" value="<?php echo $gender; ?>"></strong></td>
                                                    <td>Religion</td>
                                                    <td><strong><input type="text" name="religion" value="<?php echo $religion; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Residence</td>
                                                    <td><strong><input type="text" name="residence" value="<?php echo $residence; ?>"></strong></td>
                                                    <td>Class Teacher</td>
                                                    <td><strong><input type="text" name="classTr" value="<?php echo $classTr; ?>"></strong></td>
                                                </tr>

                                            </table>
                                        </div>
    <?php
    //view parent
    $query = "SELECT * FROM  parent WHERE biodata_student_no='" . $viewpar . "'";
    include "../php/core.inc.php";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($query_run);

    $p_parent_no = $row['parent_no'];
    $p_fname = ucfirst($row['fname']);
    $p_sname = ucfirst($row['sname']);
    $p_oname = ucfirst($row['oname']);
    $p_name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
    $p_phone_no_1 = $row['phone_1'];
    $p_phone_no_2 = $row['phone_2'];

    $p_residence = $row['residence'];
    $p_email = $row['email'];
    $p_origin = $row['origin'];
    $p_gender = $row['gender'];
    ?>
                                        <div class="col-lg-11">
                                            <div data-toggle="collapse" data-target="#demo" style="border-bottom: 4px solid #337ab7;border-radius: 5px;"><h5 style="color:#337ab7;"><i class="fa fa-user"></i>&nbspParent</h5></div>

                                            <div id="demo" class="collapse">
                                                <table border="0" width="110%" class="table-striped">

                                                    <tr>
                                                        <td>Parent's Name</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_fname; ?>"></strong>
                                                        <td>Phone Number (1)</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_phone_no_1; ?>"></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Residence</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_residence; ?>"></strong></td>
                                                        <td>Phone Number (2)</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_phone_n2_1; ?>"></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_gender; ?>"></strong></td>
                                                        <td>Email</td>
                                                        <td><strong><input type="" name="" value="<?php echo $p_email; ?>"></strong></td>
                                                    </tr>

                                            </div>


                                            </table>

                                        </div>
                                    </div>
                                    <?
                                    //view 
                                    $query_1 = "SELECT * FROM nok WHERE biodata_student_no='".$viewpar."'";
                                    include "../php/core.inc.php";
                                    $query_run_1 = mysqli_query($con,$query_1);
                                    $row=mysqli_fetch_array($query_run_1))
                                    $n_nok_no = $row['nok_no'];
                                    $n_fname = $row['fname'];
                                    echo $n_fname;
                                    $n_sname = $row['sname'];    
                                    $n_oname = $row['oname']; 
                                    $n_name = ucfirst($row['fname'])." ".ucfirst($row['sname']);
                                    echo $n_name;
                                    $n_phone_no_1 = $row['phone_1'];
                                    $n_phone_no_2 = $row['phone_2'];

                                    $n_residence = $row['residence'];
                                    $_email = $row['email'];
                                    $p_origin= $row['origin'];
                                    $p_gender = $row['gender'];

                                    ?>
                                    <div class="col-lg-11">
                                        <div data-toggle="collapse" data-target="#nok" style="border-bottom: 4px solid #337ab7;border-radius: 5px;" ><h5 style="color:#337ab7;"><i class="fa fa-users"></i>&nbspNext Of Kin</h5></div>

                                        <div id="nok" class="collapse">
                                            <table border="0" width="110%" class="table-striped">
                                                <tr>
                                                    <td>NOK's Name</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_nok_no; ?>"></strong></td>
                                                    <td>Phone Number (1)</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_phone_1; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Residence</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_residence; ?>"></strong></td>
                                                    <td>Phone Number (2)</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_phone_2; ?>"></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_gender; ?>"></strong></td>
                                                    <td>Email</td>
                                                    <td><strong><input type="" name="" value="<?php echo $n_email; ?>"></strong></td>
                                                </tr>
                                        </div>

                                        </table>
                                    </div>
                                </div>        
    <?php
}

function settings() {
    ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="page-header">::System Settings</h2>
                                    </div>

                                    <div class="col-lg-4">
    <?php
    if (isset($_POST['updateGrade'])) {
        $F9from = $_POST['F9f'];
        $F9to = $_POST['F9t'];
        $p8from = $_POST['p8from'];
        $p8to = $_POST['p8to'];
        $p7from = $_POST['p7from'];
        $p7to = $_POST['p7to'];
        $c6from = $_POST['c6from'];
        $c6to = $_POST['c6to'];
        $c5from = $_POST['c5from'];
        $c5to = $_POST['c5to'];
        $c4from = $_POST['c4from'];
        $c4to = $_POST['c4to'];
        $c3from = $_POST['c3from'];
        $c3to = $_POST['c3to'];
        $d2from = $_POST['d2from'];
        $d2to = $_POST['d2to'];
        $d1from = $_POST['d1from'];
        $d1to = $_POST['d1to'];

        /* array */
        $data = "
                                F9from = '$F9from',
                                F9to = '$F9to',
                                p8from = '$p8from',
                                p8to = '$p8to',
                                p7from = '$p7from',
                                p7to = '$p7to',
                                c6from = '$c6from',
                                c6to = '$c6to',
                                c5from = '$c5from',
                                c5to = '$c5to',
                                c4from = '$c4from',
                                c4to = '$c4to',
                                c3from = '$c3from',
                                c3to = '$c3to',
                                d2from = '$d2from',
                                d2to = '$d2to',
                                d1from = '$d1from',
                                d1to = '$d1to'
                            ";
        Update2('grade', 'id', '2', $data);
    }
    $query = "SELECT * FROM  grade WHERE id = 2";
    include "core.inc.php";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($query_run);
    ?> 
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Grading
                                            </div>
                                            <div class="panel-body">

                                                <form method="post" role ="form" >
                                                    <table class="table-striped" cellspacing = "10">
                                                        <thead style="font-weight:bold;text-align:center">
                                                            <tr>
                                                                <td>Grade</td>
                                                                <td>From</td>
                                                                <td>To</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody >
                                                            <tr>
                                                                <td>F9</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['F9from'] ?>"  name ="F9f"></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['F9to'] ?>" name ="F9t" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>P8</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['p8from'] ?>" name ="p8from"></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['p8to'] ?>" name ="p8to" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>P7</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['p7from'] ?>" name ="p7from" ></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['p7to'] ?>" name ="p7to" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>C6</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c6from'] ?>" name ="c6from" ></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c6to'] ?>" name ="c6to"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>C5</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c5from'] ?>" name ="c5from"  ></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c5to'] ?>" name ="c5to" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>C4</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c4from'] ?>" name ="c4from" ></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c4to'] ?>"  name ="c4to"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>C3</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c3from'] ?>" name ="c3from"></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['c3to'] ?>" name ="c3to"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['d2from'] ?>" name ="d2from"></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['d2to'] ?>" name ="d2to"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>D1</td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['d1from'] ?>" name ="d1from"></td>
                                                                <td><input type = "text" class="form-control grade" value = "<?php echo $row['d1to'] ?>"  name ="d1to"></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <input type = "submit" class ="btn btn-primary pull-right" value="Save" style="margin-top:5px;" name="updateGrade">
                                                </form>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

    <?php
}

function updatebio($studentno) {
    //echo $studentno;
    $queryBiodata = "SELECT * FROM  biodata WHERE student_no = '" . $studentno . "'";
    include "core.inc.php";
    $query_runBiodata = mysqli_query($con, $queryBiodata);
    $rowBiodata = mysqli_fetch_array($query_runBiodata);
    $name = $rowBiodata['sname'];
    //echo $name."Nooooooooooooo";

    $queryParent = "SELECT * FROM  parent WHERE biodata_student_no = '" . $student_no . "'";
    $query_runParent = mysqli_query($con, $queryParent);
    $rowParent = mysqli_fetch_array($query_runParent);
    if(!$query_runParent){
        echo "No".mysqli_error($con);
    }
    $rne = $row['fname'];
    echo $rne;

    $queryNok = "SELECT * FROM  nok WHERE biodata_student_no = '" . $student_no . "'";
    include "core.inc.php";
    $query_runNok = mysqli_query($con, $queryNok);
    $rowNok = mysqli_fetch_array($query_runNok);
    if(!$query_runNok){
        echo "Nolmmmmmmmmmmmmmmmmmmmmmmmm".mysqli_error($con);
    }

    $queryPLE = "SELECT * FROM  pleresult WHERE student_no = '" . $student_no . "'";
    include "core.inc.php";
    $query_runPLE = mysqli_query($con, $queryPLE);
    $rowPLE = mysqli_fetch_array($query_runPLE);
    if(!$query_runPLE){
        echo "Noquery_runPLE".mysqli_error($con);
    }

    $queryUCE = "SELECT * FROM  uceresults WHERE student_no = '" . $student_no . "'";
    include "core.inc.php";
    $query_runUCE = mysqli_query($con, $queryUCE);
    $rowUCE = mysqli_fetch_array($query_runUCE);
    if(!$query_runUCE){
        echo "Noqquery_runUCE".mysqli_error($con);
    }
    $thisphy = $rowUCE['phy'];


    $queryMedical = "SELECT * FROM  medicalproblem WHERE biodata_student_no = '" . $student_no . "'";
    include "core.inc.php";
    $query_runMedical = mysqli_query($con, $queryMedical);
    $rowMedical = mysqli_fetch_array($query_runMedical);
    if(!$query_runMedical){
        echo "Npppooooooooooooquery_runMedical".mysqli_error($con);
    }
    

    if (isset($_POST['updateInfo'])) {
        //Biodata
        $rand = rand(1000, 20000);
        $studentNo = '218' . $rand;
        $admissionNo = $_POST['admission_no'];
        $sname = $_POST['sname'];
        $oname = $_POST['oname'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $student_type = $_POST['student_type'];
        $house = $_POST['house'];
        $class = $_POST['class'];
        $fname = $_POST['fname'];
        $religion = $_POST['religion'];
        $residence = $_POST['residence'];
        $dob = $_POST['dob'];
        $date_joined = $_POST['date_joined'];
        $origin = $_POST['student_type'];
        $section = $_POST['section'];
        $fullName = $sname . "" . $fname;
        //Parent
        $psname = $_POST['psname'];
        $pphone_1 = $_POST['pphone_1'];
        $fpname = $_POST['fpname'];
        $pgender = $_POST['pgender'];
        $pphone_2 = $_POST['pphone_2'];
        $poname = $_POST['poname'];
        $presidence = $_POST['presidence'];
        $pemail = $_POST['pemail'];
        //Nok
        $n_sname = $_POST['n_sname'];
        $n_phone_1 = $_POST['n_phone_1'];
        $n_fname = $_POST['n_fname'];
        $n_phone_2 = $_POST['n_phone_2'];
        $n_oname = $_POST['n_oname'];
        $n_email = $_POST['n_email'];
        //Academic Background
        $prevsch1 = $_POST['prevsch1'];
        $prevsch2 = $_POST['prevsch2'];
        $prevsch3 = $_POST['prevsch3'];
        $prevsch1Period = $_POST['prevsch1Period'];
        $prevsch2Period = $_POST['prevsch2Period'];
        $prevsch3Period = $_POST['prevsch3Period'];
        $prevsch1Qual = $_POST['prevsch1Qual'];
        $prevsch2Qual = $_POST['prevsch2Qual'];
        $prevsch3Qual = $_POST['prevsch3Qual'];
        //PLE Results
        $pleIndexNo = $_POST['pleIndexNo'];
        $schNameple = $_POST['schNameple'];
        $pleEng = $_POST['pleEng'];
        $pleMath = $_POST['pleMath'];
        $pleSci = $_POST['pleSci'];
        $pleSST = $_POST['pleSST'];
        //UCE Results
        $uceIndexNo = $_POST['uceIndexNo'];
        $ucePhy = $_POST['ucePhy'];
        $uceChem = $_POST['uceChem'];
        $uceBio = $_POST['uceBio'];
        $uceMath = $_POST['uceMath'];
        $uceHist = $_POST['uceHist'];
        $uceGeo = $_POST['uceGeo'];
        $uceCRE = $_POST['uceCRE'];
        $uceEng = $_POST['uceEng'];
        $optSubject1 = $_POST['optSubject1'];
        $optSubject1Grade = $_POST['optSubject1Grade'];
        $optSubject2Grade = $_POST['optSubject2Grade'];
        //Medical
        $medicalProblemDesc = $_POST['medicalProblemDesc'];
        if (isset($_FILES['imagePic'])) {
            $errors = array();
            $file_name = $_FILES['imagePic']['name'];
            $file_size = $_FILES['imagePic']['size'];
            $file_tmp = $_FILES['imagePic']['tmp_name'];
            $file_type = $_FILES['imagePic']['type'];

            $extensions = array("jpeg", "jpg", "png");

            if ($file_type != 'image/jpeg') {
                $errors = "extension not allowed, please choose a JPEG or PNG file.";
                echo $errors;
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
                echo $errors;
            }
            $date = date('Hms');
            $newFilename = trim($fullName . '.jpg');
            echo $newFilename;
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/stdphotos/" . $newFilename);
            } else {
                echo "Image Upload Failed. Please Try Again";
            }
        }
        $dataBiodata = array(
            'student_no' => $studentNo,
            'admission_no' => $admissionNo,
            'sname' => $sname,
            'oname' => $oname,
            'gender' => $gender,
            'nationality' => $nationality,
            'student_type' => $student_type,
            'house' => $house,
            'class' => $class,
            'fname' => $fname,
            'religion' => $religion,
            'residence' => $residence,
            'dob' => $dob,
            'date_joined' => $date_joined,
            'origin' => $origin,
            'section' => $section,
            'photoname' => $newFilename
        );
        echo $dataBiodata;
        $updateBiodata = "UPDATE biodata SET " . $dataBiodata . " WHERE student_no = '" . $student_no . "'";
        include "core.inc.php";
        $resultBiodata = mysqli_query($con, $updateBiodata);
        if ($resultBiodata) {
            //Parent Insert
            $dataParent = array(
                'sname' => $psname,
                'phone_1' => $pphone_1,
                'fname' => $fpname,
                'gender' => $pgender,
                'phone_2' => $pphone_2,
                'oname' => $poname,
                'email' => $pemail,
                'residence' => $presidence,
                'biodata_student_no' => $studentNo,
            );
            $updateParent = "UPDATE parent  SET '.$dataParent.'  WHERE biodata_student_no = '" . $student_no . "'";
            include "core.inc.php";
            $resultParent = mysqli_query($con, $updateParent);
            //NOK Insert
            $dataNok = array(
                'sname' => $n_sname,
                'phone_1' => $n_phone_1,
                'fname' => $n_fname,
                'phone_2' => $n_phone_2,
                'email' => $n_email,
                'biodata_student_no' => $studentNo,
            );
            $fieldsNok = array_keys($dataNok);
            $updateNok = "UPDATE nok SET  '.$dataNok.' WHERE biodata_student_no = '" . $student_no . "'";
            $resultNok = mysqli_query($con, $updateNok);
            /* Former School Insert
              $sql_1 = "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '".$prevsch1."', '".$prevsch1Qual."', '".$prevsch1Period."', '".$studentNo."')";
              $resultsql_1 = mysqli_query($con, $sql_1);

              $sql_2= "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '".$prevsch2."', '".$prevsch2Qual."', '".$prevsch2Period."', '".$studentNo."')";
              $resultsql_2 = mysqli_query($con, $sql_2);

              $sql_3= "INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES (NULL, '".$prevsch3."', '".$prevsch3Qual."', '".$prevsch3Period."', '".$studentNo."')";
              $resultsql_3 = mysqli_query($con, $sql_3);
             */
            //PLE Results
            // $insertPLE= "UPDATE `pleresult`  SET (`id`, `indexNo`,`schoolName`,`eng`, `sci`, `sst`, `math`, `student_no`) VALUES ('', '".$pleIndexNo."', '".$schNameple."',  '".$pleEng."', '".$pleSci."','".$pleSST."','".$pleMath."' ,'".$studentNo."')";          
            // $resultPLE = mysqli_query($con, $insertPLE);
            //UCE 
            $dataUCE = array(
                'indexNo' => $uceIndexNo,
                'phy' => $ucePhy,
                'chem' => $uceChem,
                'bio' => $uceBio,
                'math' => $uceMath,
                'hist' => $uceHist,
                'geo' => $uceGeo,
                'cre' => $uceCRE,
                'eng' => $uceEng,
                'opt1' => $optSubject1,
                'opt2' => $optSubject2,
                'mark' => $optSubject1Grade,
                'mark2' => $optSubject2Grade,
                'student_no' => $studentNo
            );
            $updateUCE = "UPDATE   uceresults  SET '.$dataUCE.' WHERE student_no = '" . $student_no . "'";
            $resultUCE = mysqli_query($con, $updateUCE);
            //Medical Problem
            $updateMedical = "UPDATE SET  `medicalproblem` = '" . $medicalProblemDesc . "' WHERE biodata_student_no = '" . $student_no . "'";
            $resultMedical = mysqli_query($con, $updateMedical);
            echo "yes";
        } else {
            echo "error" . mysqli_error($con);
        }
    }
    ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="page-header">::Students Biodata / Update Info</h2> 
                                </div>
                            </div>

                            <div class="panel panel-default" class="col-lg-4">
                                <div class="panel-heading" style="background-color:#337ab7;"> 
                                    <div style="color:#FFF;"> <i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#demo"></i>Personal Details</div>
                                </div>
                                <div class="panel-body" style="background-color:#f5f5f5;"  id="demo" class="collapse">
                                    <div class="row">
                                        <form method="post" role="form" enctype="multipart/form-data">
                                            <div class="col-lg-3" style="margin:2%;">
    <?php echo '<img src="../img/stdphotos/' . $rowBiodata['photoname'] . '" style="width:145px;height:173px;" />' ?>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Upload Photo</label>
                                                        <input type = "file" name="imagePic">
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Admission Number</label><sup>*</sup>
                                                    <input class="form-control" placeholder="14/D/223" name="admission_no" value = "<?php echo $rowBiodata['admission_no'] ?>" >
                                                </div>
                                                <label>Surname</label><sup>*</sup>
                                                <input class="form-control" placeholder="Surname" name="sname" value = "<?php echo $rowBiodata['sname'] ?>" >
                                                <label>Othernames</label>
                                                <input class="form-control" placeholder="Othernames" name="oname" value = "<?php echo $rowBiodata['oname'] ?>" >  
                                                <label>Gender</label><sup>*</sup>
                                                <select class="form-control" name="gender" value = "<?php echo $rowBiodata['gender'] ?>" >
                                                    <option value ="">--Select--</option>
                                                    <option value ="Male">Male</option>
                                                    <option value ="Female">Female</option>
                                                </select>  
                                                <label>Country Of Origin</label><sup>*</sup>
                                                <select class="form-control" name="nationality" value = "<?php echo $rowBiodata['nationality'] ?>">
                                                    <option>Uganda</option>
                                                    <option>Kenya</option>
                                                    <option>Tanzania</option>
                                                    <option>Rwanda</option>
                                                    <option>Burundi</option>
                                                </select>  
                                                <label>Student Type</label><sup>*</sup>
                                                <select class="form-control" name="student_type" value = "<?php echo $rowBiodata['student_type'] ?>">
                                                    <option>Current</option>
                                                    <option>Former</option>
                                                </select>
                                                <label>House</label>
                                                <input class="form-control" placeholder="House" name="house" value = "<?php echo $rowBiodata['house'] ?>">    
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Class</label><sup>*</sup>
                                                    <select class="form-control" name="class" value = "<?php echo $rowBiodata['class'] ?>">
                                                        <option>Senior One</option>
                                                        <option>Senior Two</option>
                                                        <option>Senior Three</option>
                                                        <option>Senior Four</option>
                                                        <option>Senior Five</option>
                                                        <option>Senior Six</option>
                                                    </select>
                                                    <label>Firstname</label><sup>*</sup>
                                                    <input class="form-control" placeholder="Firstname" name="fname" value = "<?php echo $rowBiodata['fname'] ?>">  
                                                    <label>Religion</label><sup>*</sup>
                                                    <select class="form-control" name="religion" value = "<?php echo $rowBiodata['religion'] ?>">
                                                        <option>Roman Catholic</option>
                                                        <option>Anglican</option>
                                                        <option>Moslem</option>
                                                        <option>Other</option>               
                                                    </select> 
                                                    <label>Residence</label><sup>*</sup>
                                                    <input class="form-control" placeholder="Residence" name="residence" value = "<?php echo $rowBiodata['residence'] ?>">  
                                                    <label>Section</label><sup>*</sup>
                                                    <select class="form-control" name="section" value = "<?php echo $rowBiodata['section'] ?>">
                                                        <option>Boarding</option>
                                                        <option>Day</option>
                                                    </select> 
                                                    <label for="example-datetime-local-input" class="">Date of Birth</label>
                                                    <input class="form-control" type="date"  id="example-date-input" name="dob" value = "<?php echo $rowBiodata['dob'] ?>">

                                                    <label for="example-datetime-local-input" class="">Date Joined</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_joined" value = "<?php echo $rowBiodata['date_joined'] ?>">                       
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#337ab7;">
                                    <div style="color:#FFF;" ><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#Parent"></i>Parent</div>
                                </div>
                                <div class="panel-body" style="background-color:#f5f5f5;" id="Parent" class="collapse">
                                    <div class="row">
                                        <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Surname</label><sup>*</sup>
                                                <input class="form-control" name="psname" value = "<?php echo $resultParent["sname"] ?>">  
                                                <label>Country of Origin </label>
                                                <select class="form-control" name="porigin" value = "<?php echo $resultParent["origin"] ?>">
                                                    <option value="">--Select--</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Burundi">Burundi</option>
                                                </select>
                                                <label>Phone Number 1</label><sup>*</sup>
                                                <input class="form-control" placeholder="0777-000000" name="pphone_1" value = "<?php echo $resultParent["phone_1"] ?>">                         
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Firstname</label><sup>*</sup>
                                                <input class="form-control" name="fpname" value = "<?php echo $resultParent["fname"] ?>">  
                                                <label>Father/Mother</label><sup>*</sup>
                                                <select class="form-control" name="pgender" value = "<?php echo $resultParent["gender"] ?>">
                                                    <option value="">--Select--</option>
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Guardian">Guardian</option>
                                                </select>
                                                <label>Phone Number 2</label>
                                                <input class="form-control" placeholder="0700-000000" name="pphone_2"  value = "<?php echo $resultParent["phone_2"] ?>">                         
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Othernames</label>
                                                <input class="form-control" name="poname" value = "<?php echo $resultParent["oname"] ?>">  
                                                <label>Residence</label>
                                                <input class="form-control" name="presidence" value = "<?php echo $resultParent["residence"] ?>">  
                                                <label>Email</label>
                                                <input class="form-control" placeholder="example@sco.com" name="pemail" value = "<?php echo $resultParent["email"] ?>">  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#337ab7;">
                                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#nok"></i>Next of Kin</div>
                                </div>
                                <div class="panel-body" style="background-color:#f5f5f5;" id="nok" class="collapse">
                                    <div class="row">
                                        <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Surname</label><sup>*</sup>
                                                <input class="form-control" name="n_sname" value = "<?php echo $rowNok["sname"] ?>">  

                                                <label>Phone Number 1</label><sup>*</sup>
                                                <input class="form-control" placeholder="0777-000000" name="n_phone_1" value = "<?php echo $rowNok["phone_1"] ?>">                         
                                            </div>

                                        </div>
                                        <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Firstname</label><sup>*</sup>
                                                <input class="form-control" name="n_fname" value = "<?php echo $rowNok["fname"] ?>">  

                                                <label>Phone Number 2</label>
                                                <input class="form-control" placeholder="0700-000000" name="n_phone_2" value = "<?php echo $rowNok["phone_2"] ?>">                         
                                            </div>

                                        </div>
                                        <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Othernames</label>
                                                <input class="form-control" name="n_oname" value = "<?php echo $rowNok["oname"] ?>">  

                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="example@sco.com" name="n_email" value = "<?php echo $rowNok["email"] ?>">  

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#337ab7;">

                                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#academic" aria-expanded="false"></i>Academic Background</div>
                                </div>
                                <div class="panel-body" style="background-color:#f5f5f5;" id="academic" class="collapse">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <p><strong><u> Previous Schools Attended</u></strong></p>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label>School Name</label>
                                                <input class="form-control" name="prevsch1"> 
                                                <label></label>  
                                                <input class="form-control" name="prevsch2"> 
                                                <label></label>        
                                                <input class="form-control" name="prevsch3">                   
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Year</label><sup>*</sup>
                                                <input class="form-control" name="prevsch1Period" placeholder = 'Example: 2012-2013'>  
                                                <label></label> 
                                                <input class="form-control" name="prevsch2Period" placeholder = 'Example: 2012-2013'>  
                                                <label></label> 
                                                <input class="form-control" name="prevsch3Period" placeholder = 'Example: 2012-2013'>  
                                            </div>

                                        </div>
                                        <div class="col-lg-2">

                                            <div class="form-group">
                                                <label>Qualification</label>
                                                <input class="form-control" name="prevsch1Qual" placeholder = 'Example: UCE'> 
                                                <label></label> 
                                                <input class="form-control" name="prevsch2Qual" placeholder = 'Example: UCE'> 
                                                <label></label> 
                                                <input class="form-control" name="prevsch3Qual" placeholder = 'Example: UCE'>                      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" >
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse"  href="#collapseOne" aria-expanded="false" class=""><i class="glyphicon glyphicon-menu-down"></i>PLE Results</a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="color:">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label>Index No.</label>
                                                        <input class="form-control" name="pleIndexNo" value = "<?php echo $rowPLE["indexNo"] ?>"> 
                                                        <label>School Name</label>
                                                        <input class="form-control" name="schNameple" value = "<?php echo $rowPLE["schoolName"] ?>"> 
                                                        <label>English</label>
                                                        <input class="form-control" name="pleEng" value = "<?php echo $rowPLE["eng"] ?>"> 
                                                        <label>Math</label>  
                                                        <input class="form-control" name="pleMath" value = "<?php echo $rowPLE["math"] ?>"> 
                                                        <label>Science</label>        
                                                        <input class="form-control" name="pleSci" value = "<?php echo $rowPLE["sci"] ?>">   
                                                        <label>Social Studies</label>        
                                                        <input class="form-control" name="pleSST" value = "<?php echo $rowPLE["sst"] ?>"> 
                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#uce" aria-expanded="true" class=""><i class="glyphicon glyphicon-menu-down"></i>UCE Results</a>
                                                </h4>
                                            </div>
                                            <div id="uce" class="panel-collapse collapse in" aria-expanded="true" style="">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label>UCE Index No.</label>
                                                        <input class="form-control" name="uceIndexNo." value = "<?php echo $rowUCE["indexNo"] ?>"> 
                                                        <div class="col-lg-4">
                                                            <label>Physics</label>
                                                            <input class="form-control" name="ucePhy" value = "<?php echo $rowUCE["phy"] ?>"> 
                                                            <label>Chem</label>  
                                                            <input class="form-control" name="uceChem" value = "<?php echo $rowUCE["chem"] ?>"> 
                                                            <label>Biology</label>        
                                                            <input class="form-control" name="uceBio" value = "<?php echo $rowUCE["bio"] ?>">   
                                                            <label>Math</label>        
                                                            <input class="form-control" name="uceMath" value = "<?php echo $rowUCE["math"] ?>"> 
                                                        </div>    
                                                        <div class="col-lg-4">
                                                            <label>History</label>

                                                            <input class="form-control" name="uceHist" value = "<?php echo $rowUCE["hist"] ?>"> 

                                                            <label>Geography</label>  
                                                            <input class="form-control" name="uceGeo" value = "<?php echo $rowUCE["geo"] ?>"> 
                                                            <label>CRE</label>        
                                                            <input class="form-control" name="uceCRE" value = "<?php echo $rowUCE["cre"] ?>">   
                                                            <label>English</label>        
                                                            <input class="form-control" name="uceEng" value = "<?php echo $rowUCE["eng"] ?>"> 

                                                        </div>  
                                                        <div class="col-lg-4">
                                                            <label>Optional Subject</label>
                                                            <input class="form-control" name="optSubject1" placeholder = "Example:Art" value = "<?php echo $rowUCE["opt1"] ?>"> 
                                                            <label>Grade</label>  
                                                            <input class="form-control" name="optSubjectGrade1" placeholder ="Example:D1" value = "<?php echo $rowUCE["mark"] ?>"> 
                                                            <label>Optional Subject</label>        
                                                            <input class="form-control" name="optSubject2" placeholder = "Example:Computer" value = "<?php echo $rowUCE["opt2"] ?>">   
                                                            <label>Mark</label>        
                                                            <input class="form-control" name="optSubject2Grade" placeholder = "Example:D2" value = "<?php echo $rowUCE["mark2"] ?>"> 
                                                        </div>                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#337ab7;">
                                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down" style="color:White;" data-toggle="collapse" data-target="#medical" aria-expanded="false"></i>Medical Information</div>
                                </div>
                                <div class="panel-body" style="background-color:#f5f5f5;" id="medical">
                                    <div class="row">
                                        <form method="post" role="form">
                                            <div class="col-lg-12">
                                                <p><strong><u>Does the Student have any Medical problems?</u></strong><input type="checkbox" value="medicalProblem"></p>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>If Yes, describe the medical problem.</label>
                                                    <textarea style="margin: 0px; width: 343px; height: 121px;" name = "medicalProblemDesc" value = "<?php echo $rowMedical["medicalProblem"] ?>"></textarea>             
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right" style="margin-top: 25px;" name="updateInfo">Update</button>
                            </form> 
    <?php
}
function Marksheets() {
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">::Examination: Class Marksheet</h2>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <form method ="post" role = "form">
                                <label >Class</label>
                                <select class="form-control class" name= "class">
                                    <option value="">--Select--</option>
                                    <option value="Senior One" class="class">Senior One</option>
                                    <option value="Senior Two">Senior Two</option>
                                    <option value="Senior Two">Senior Three</option>
                                    <option value="Senior Four">Senior Four</option>
                                </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Term</label>
                            <select class="form-control term" name ="term">
                                <option value="">--Select--</option>
                                <option value="Term One">Term One</option>
                                <option value="Term Two">Term Two</option>
                                <option value="Term Three">Term Three</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label >Year</label>
                            <select class="form-control year" name = "year">
                                <option value="">--Select--</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Type</label>
                            <select class='form-control exam' required='required' name='exam_type'>
                                <option value = "">--Select--</option>
    <?php
    include "core.inc.php";
    $sql = mysqli_query($con, "SELECT * FROM exam_types");
    if ($sql) {
        echo "Yes";
    } else {
        echo "Error" . mysqli_error($con);
    }
    while ($row = mysqli_fetch_array($sql)) {
        ?>
                                    <option id ="<?php echo $row['id']; ?>"><?php echo $row['exam_name']; ?></option>
                                    <?php
                                }
                                ?>                                                   
                            </select>

                        </div>
                        <div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-primary" style="margin-top:6px;">
                                <div class="panel-heading">
                                    <b class="stdName"></b>
                                    <label class="pull-right">Student:</label>

                                    <select class='pull-right student' required='required' style = "color:black"  name = "stdname">
                                        <option value = "">--Select--</option>
    <?php
    $sql_sub = mysqli_query($con, "SELECT * FROM subjects WHERE sname != '' ");
    while ($row = mysqli_fetch_array($sql_sub)) {
        $sname = strtoupper($row['sname']);
        ?>
                                            <option id ="<?php echo $row['id']; ?>"><?php echo $sname . " " . $row['fname'] ?></option>
                                            <?php
                                        }
                                        ?>                                                   
                                    </select>

                                </div>
                                <div class="panel-body">


                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <table border="0" width="110%" class="table-striped">
                                                <thead style="border-bottom:2px solid black;margin-bottom:3px;">
                                                <tr style="font-weight:bold;">
                                                    
                                                <td>Subject</td>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM subjects");
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        $short = strtoupper($row['short']);
                                                        ?>
                                                        <td><?php echo $short ?></td>
                                                    <?php 
                                                    }
                                                    ?>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sql = mysqli_query($con, "SELECT * FROM biodata WHERE sname != '' ");
                                                $i = 0;
                                                $num = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    $sname = strtoupper($row['sname']);
                                                    $fname = ucfirst($row['fname']);
                                                    echo "<tr><td>$sname  $fname</td>";
                                                    echo "<td><input type = 'text' class='form-control' style='width:42px;'></td>";
                                                    echo "</tr>";
                                                
                                                                    
                                                }

     



    if (isset($_POST['insertMarks'])) {
      
    }
    ?>

                                                </tbody>
                                            </table>

                                        </div>    

                                    </div>                        </div>
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right " name="insertMarks"> Submit Marks</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>




    <?php
}
function GeneralMarksheet() {
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">::Examination Results Entry/Bulk</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <form method ="post" role = "form">
                                <label >Class</label>
                                <select class="form-control class" name= "class">
                                    <option value="">--Select--</option>
                                    <option value="Senior One" class="class">Senior One</option>
                                    <option value="Senior Two">Senior Two</option>
                                    <option value="Senior Two">Senior Three</option>
                                    <option value="Senior Four">Senior Four</option>
                                </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Term</label>
                            <select class="form-control term" name ="term">
                                <option value="">--Select--</option>
                                <option value="Term One">Term One</option>
                                <option value="Term Two">Term Two</option>
                                <option value="Term Three">Term Three</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label >Year</label>
                            <select class="form-control year" name = "year">
                                <option value="">--Select--</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="female">Type</label>
                            <select class='form-control exam' required='required' name='exam_type'>
                                <option value = "">--Select--</option>
    <?php
    include "core.inc.php";
    $sql = mysqli_query($con, "SELECT * FROM exam_types");
    if ($sql) {
        echo "Yes";
    } else {
        echo "Error" . mysqli_error($con);
    }
    while ($row = mysqli_fetch_array($sql)) {
        ?>
                                    <option id ="<?php echo $row['id']; ?>"><?php echo $row['exam_name']; ?></option>
                                    <?php
                                }
                                ?>                                                   
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <table class="table-bordered table-striped" style="width: 100%;">
                            <thead>
                            <th>Name</th>
                            <th>Phy</th>
                            <th>Chem</th>
                            <th>Math</th>
                            <th>Bio</th>
                            <th>Hist</th>
                            <th>Geo</th>
                            <th>Ent</th>
                            <th>Comm</th>
                            <th>Comp</th>
                            <th>Art</th>
                            <th>Comp</th>
                            <th>Comp</th>
                            </thead>
                            <tbody>
                            <?php
                             

                             $query_exam = "SELECT exam_result_no,final_score,grade,term,year,class,termPart,biodata_student_no FROM exam_result WHERE final_score !=''";
                             $sql_exams = mysqli_query($con,$query_exam);
                             $row = mysqli_fetch_array($sql_exams);
                             $biodata_student_no = $row['biodata_student_no'];
                             $P6 = $row['P6'];

                             $sql = mysqli_query($con, "SELECT * FROM biodata WHERE sname != '' AND student_no = '".$biodata_student_no."'");
                             $fetchRow = mysqli_fetch_array($sql);

                             $sname = $fetchRow['sname'];
                                 echo " <thead>
                                 <th>$sname</th>
                                 <th>$P6</th>
                                 <th>Chem</th>
                                 <th>Math</th>
                                 <th>Bio</th>
                                 <th>Hist</th>
                                 <th>Geo</th>
                                 <th>Ent</th>
                                 <th>Comm</th>
                                 <th>Comp</th>
                                 <th>Art</th>
                                 <th>Comp</th>
                                 <th>Comp</th>
                                 </thead>";
                             
                         

                            ?>
                               
                            </tbody>
                        </table>
                    </div>


                                
                                </form>
                            </div>

                        </div>
                    </div>




    <?php
}
function IndividualMarksheet() {
    ?>
<div class="row">
<div class="col-lg-12">
    <h2 class="page-header">::Examination Results/ Individual</h2>
</div>
<form role="form" method="post">
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-2">
            <label >Class</label>
            <select class="form-control class" name= "class">
                <option value="">--Select--</option>
                <option value="Senior One" class="class">Senior One</option>
                <option value="Senior Two">Senior Two</option>
                <option value="Senior Two">Senior Three</option>
                <option value="Senior Four">Senior Four</option>
            </select>
        </div>
        <div class="col-lg-2">
            <label for="female">Term</label>
            <select class="form-control term" name ="term">
                <option value="">--Select--</option>
                <option value="Term One">Term One</option>
                <option value="Term Two">Term Two</option>
                <option value="Term Three">Term Three</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col-lg-2">
            <label >Year</label>
            <select class="form-control year" name = "year">
                <option value="">--Select--</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
        </div>
        <div class="col-lg-2">
            <label >Exam</label>
            <select class='form-control exam' required='required' name='exam'>
                <option value = "">--Select--</option>
                <?php
                include "core.inc.php";
                $sql = mysqli_query($con, "SELECT * FROM exam_types");
                if ($sql) {
                    echo "Yes";
                } else {
                    echo "Error" . mysqli_error($con);
                }
                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <option id ="<?php echo $row['id']; ?>"><?php echo $row['exam_name']; ?></option>
                    <?php
                }
                ?>                                                   
            </select>
        </div>
        <div class="col-lg-4">
            <label>Student:</label>
            <select class='student form-control' required='required' style = "color:black"  name = "student">
                <option value = "">--Select--</option>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM biodata WHERE sname != '' ");
                while ($row = mysqli_fetch_array($sql)) {
                    $sname = strtoupper($row['sname']);
                    ?>
                    <option value="<?php echo $row['student_no']; ?>"><?php echo $sname . " " . $row['fname'] ?></option>
                    <?php
                }
                ?>                                                   
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
        <input type = "hidden" value = "" class="hiddenId" name="hiddenName">

            <button class = "btn btn-primary btn-sm pull-right getresults"  style="margin-top:5px;"><i class="glyphicon glyphicon-circle-arrow-down"></i> &nbsp;| Get Results</button>&nbsp;&nbsp;&nbsp;
            <a href="users_report.php?generatereport=printresult" class = "btn btn-success btn-sm pull-right printResults"  style="margin-top:5px;"><i class="glyphicon glyphicon-print"></i> &nbsp;| Print Results</a>

        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-lg-12">
        <hr>
        <div class="col-lg-3">
        <table class="table-striped" style="padding:20px;">
        <tr>
        <td>Name:</td>
        <td class="nameR bold"></td>
        </tr>
        <tr>
        <td>RegNo:</td>
        <td class="regNoR bold"></td>
        </tr>
        <tr>
        <td>Class:</td>
        <td class="classR bold"></td>
        </tr>
        <tr>
        <td>Year:</td>
        <td class="yearR bold"></td>
      </tr>
      <tr>
        <td>Exam</td>
        <td class="examR bold"></td>
      </tr>
        </table>
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-8">
        <table class="table table-striped table-bordered table-hover">
        <thead>
        <th>Subject</th>
        <th>Mark</th>
        <th>Grade</th>
        <th>Comment</th>
        </thead>
        <tbody class="individualbd">
      

        </tbody>
        </table>
        </div>
    </div>
</div>
    <?php
}

?>