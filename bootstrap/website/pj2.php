<?php
$clockInTime="";

if(isset($_POST['cloc_in'])){
    //user clocked in
    $clockInTime = date("Y-m-d H:i:s"); //current time

}
elseif (isset($_POST['clock_out'])){
    //worker clocked out
    $clockOutTime =date("Y-m-d H:i:s");

}
header("Location: pj.html");
exit();