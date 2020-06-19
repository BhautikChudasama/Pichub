<?php
# created by PICHUB
$uid=$_COOKIE['u'];
$pid=$_GET['pi'];
date_default_timezone_set('Asia/Kolkata');
$ut = date('m/d/Y h:i:s',time());
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("pichub", $con);
# insert
$q = mysql_query("insert into liked values('$pid','$uid','$ut')");
header('Location: http://localhost/pichub/');
 ?>
