<?php
include('dbconnect.php');
//date
$date = new DateTime();
$date->setTimezone(new DateTimeZone('Europe/Copenhagen'));
$fdate = $date->format('Y/m/d');
//time-in
$time_in = new DateTime();
$time_in->setTimezone(new DateTimeZone('Europe/Copenhagen'));
$ftime_in = $time_in->format('H:i:s');
//time-out
$time_out = new DateTime();
$time_out->setTimezone(new DateTimeZone('Europe/Copenhagen'));
$ftime_out = $time_out->format('H:i:s');
//userID
$user_id = $_POST['user_id'];

  //Check if user exist
  $sql_checkuser = "SELECT id FROM users WHERE id=$user_id";
	$result = mysqli_query($con,$sql_checkuser);
	$check_user = mysqli_fetch_array($result);
  //if userid exist
  if(isset($check_user)){
      //check if user is currently timeIN (if userID and current date exists)
      $sql_timeincheck = "SELECT * FROM timesheets WHERE date=CURDATE() AND user_id=$user_id";
      $result = mysqli_query($con,$sql_timeincheck);
    	$timeincheck = mysqli_fetch_array($result);
      if(isset($timeincheck)){
        //insert timeOUT
        $sql_timeout = "UPDATE timesheets SET time_out='$ftime_out' WHERE date=CURDATE() AND user_id=$user_id";
        if(mysqli_query($con, $sql_timeout)){
            echo "Time-OUT Successful";
        }

      }else {
        //insert timeOUT
          $sql_timein = "INSERT INTO timesheets (date,time_in,user_id) VALUES ('$fdate','$ftime_in','$user_id')";
          if(mysqli_query($con,$sql_timein)){
                   echo "Time-IN Successful";
                 }
      }
    }else {
    echo "Invalid Keycode! Please contact your administrator.";
  }
mysqli_close($con);

?>