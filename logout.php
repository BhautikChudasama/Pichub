<?php
unset($_COOKIE["auth"]);
unset($_COOKIE["u"]);

setcookie("auth",null,-1,"/");
setcookie("u",null,-1,"/");
header("Location:http://localhost/pichub/?#ref");
?>
