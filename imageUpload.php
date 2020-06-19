<?php
if ($_COOKIE["auth"]=="false") {
  header("Location:http://localhost/pichub");
}

$con = mysql_connect("localhost","root","");
$db = mysql_select_db("pichub", $con);

# directory of an image.
$target_dir = "phb/";
# random text ()
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
# get userID
$uid = $_COOKIE["u"];
# generate random postID
$pid = md5(generateRandomString());
# call function temporary image name
$t=generateRandomString();
# get all followers of user

$realImage = $target_dir.$t.basename($_FILES["p"]["name"]);
# declare upload status.
$uploadStatus = 0;
if (move_uploaded_file($_FILES["p"]["tmp_name"],$realImage)) {
  # code...
  echo "uploaded!";
  date_default_timezone_set('Asia/Kolkata');
  $ut = date('m/d/Y h:i:s',time());
  echo $ut;
    // TODO: PLACE here own post;
    mysql_query("insert into ownPost values('$pid', '$uid', '$realImage', '$ut' )");
  #insert..
   $result = mysql_query("select * from relation where Follower='$uid'");
   echo mysql_num_rows($result);
     $o=mysql_query("insert into ownPost values('$pid', '$uid', '$realImage','$ut',0,0 )");

  if(mysql_num_rows($result)>0) {
  while($row=mysql_fetch_array($result)) {
    # insert into otherPOST
    $fid=$row['userID'];
  //  $d = date();

    $l=mysql_query("insert into otherPOST values('$pid', '$fid', '$uid', '$realImage','$ut',0,0 )");


  }

   }

  else {

  }
  header("Location: http://localhost/pichub/");
}
else {
  echo "not uploaded!";
}

?>
