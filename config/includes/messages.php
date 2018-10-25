<?php
function msg_error($msgHeader, $msgContent) {
    echo "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
   <h4>  <i class='icon fa fa-remove'></i> $msgHeader</h4>
    <p>$msgContent</p>
    </div>";
}
function msg_success($msgHeader, $msgContent) {
    echo "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
     <h4><i class='icon fa fa-check'></i>$msgHeader</h4>
    <p>$msgContent</p>
    </div>";
}