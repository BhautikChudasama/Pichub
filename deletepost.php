<?php
# created by Pichub
$pi = $_GET['pi'];

$con = mysql_connect("localhost","root","");
$db = mysql_select_db("pichub",$con);

$mainPost=mysql_query("delete from ownPost where postID='$pi'");
$otherPost=mysql_query("delete from otherPOST where postID='$pi'");
$likedPost=mysql_query("delete from liked where postID='$pi'");
$commentPost=mysql_query("delete from comment where postID='$pi'");

# here redirect
echo "<script>window.location.href='http://localhost/pichub'</script>";
 ?>
