<?php
  // createUser.php
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $bdate=$_POST['bdate'];

   $email=$_POST["email"];
   $id=uniqid();
  $con=mysql_connect("localhost","root","");
  mysql_select_db("pichub", $con);
  // generate salt
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $salt = generateRandomString();
  echo $pass=$_POST["pass"];
  $realPass = md5($pass.$salt);
  if($con) {
  //  $loginTable = null;
    echo "connected!";
    // connected success
    //$userTable="insert into user values($id, $fname, $lname,'','',$bdate,null  ,$email,'','','',0,0)";
    $userTable="insert into user(userID,userFname,userLname,userCity, userBdate, userTel, userEmail, userWeb, userBio, userProfile, following, follower ) values('$id', '$fname', '$lname','','$bdate','' ,'$email','','','https://cdn4.iconfinder.com/data/icons/rcons-user/32/child_boy-128.png',0,0)";
    $runQuery = mysql_query($userTable);
    if ($runQuery) {
      echo "inserted into user";
      if (mysql_query("insert into userLogin values('$email', '$realPass', '$salt');")) {
        echo "inserted into userLogin";
        // u :id
          setcookie("u", $id, time()+(86400*30)*12,"/");
          setcookie("auth", "", time()+1,"/");
          setcookie("auth", "true", time()+(86400*30)*12,"/");
          header('Location: ./home.php?ref=loggedin');
      }
      else {
        echo "                :(";
      //  header('Location: ./index.php?ref=e');
      }
    }
    else {
      echo "error";
      //  header('Location: ./index.php?ref=e');
    }

  }
else {

}
?>
