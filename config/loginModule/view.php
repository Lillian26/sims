<?php
function auth(){
include_once 'config/authModule/real-config.php';
include_once 'config/loginModule/login-func.php';
include 'config/recordsModule/focus.php';
session_start(); // Our custom secure way of starting a PHP session.
  ?>
  
  <?php
}
  function register(){
    ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>School</b>Monitor</a>
  </div>
  <?php
  include_once 'config/recordsModule/focus.php';
  if (isset($_POST['new_institute'])) {
    include 'config/authModule//real-config.php';
      $institute_name = $_POST['institution_name'];
      $username = $_POST['username'];
      $password = $_POST['p']; // The hashed password.
      $email = $_POST['email'];
      $phone_no = $_POST['phone'];
      $key = $_POST['key'];
      $password_hash = password_hash($password,PASSWORD_DEFAULT);
      $timestamp = date('H:m:s');
      $instNo = rand(1000,5000);
      $usraccNo = rand(6000,8000);
      if(check_inst($institute_name) == false){
          if(check_serial($key) == true){
              if(new_institution($institute_name,$instNo,$usraccNo,$username, $password_hash, $email, $phone_no,$key,$timestamp,$mysqli) == true){
                msg_success('Operation Successful', 'Please proceed to login');
              }else{
                msg_error('Operation Failed', 'An error occured');
              }
          }else{
               msg_error('Operation Failed', 'Invalid Serial Key');
          }
      }else{
             msg_error('Operation Failed', 'Institute Name Already Exists');
       }
    }
            
?>
  <div class="register-box-body">
    <p class="login-box-msg">Register Institution</p>
    <form method="post">
      <div class="form-group has-feedback">
        <label>Instituion Name</label>
        <input type="text" class="form-control" name ="institution_name" required>
        <span class="fa fa-users form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Username</label>     
        <input type="text" class="form-control" name ="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" name="p" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Re-type Password</label>
        <input type="password" class="form-control" name="rp">
        <span class="glyphicon glyphicon-lock form-control-feedback" required></span>
      </div>
      <div class="form-group has-feedback">
        <label>Email</label>
        <input type="email" class="form-control" name ="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Phone No</label>
        <input type="text" class="form-control" name = "phone" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>License Key</label>
        <input type="text" class="form-control" name = "key" required>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="new_institute">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="<?php echo '?this='.base64_encode('usethistologin')?>" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div>
    <?php
}