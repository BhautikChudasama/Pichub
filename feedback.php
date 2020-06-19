<style>
body {
  background: #c8e1ed;
}
</style>
<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$rand = generateRandomString();
date_default_timezone_set('Asia/Kolkata');
$ut = date('m/d/Y h:i:s',time());
# get variables
$title = $_POST["title"];
$desc = $_POST["desc"];
# estalish the connection
$con = mysql_connect("localhost", "root", "");
mysql_select_db("pichub", $con);
# execute the query
$q = mysql_query("insert into feedback values('$rand', '$title', '$desc', '$ut')");
if ($q) {

}
 ?>
 <center><img src="https://cdn.dribbble.com/users/613331/screenshots/3007469/typewriter_v4.gif" alt="thankyou!"></center>
 <script>
 setTimeout(()=> {window.location.href="http://localhost/pichub"},10000);
 </script>
