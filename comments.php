<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comment </title>
  <style>
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
  header {
    width: 100%;
    height: 56px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top:0;
    z-index: 1;
  }
  header > p {
    font-family: roboto;
    font-size: 16px;
    color:#000;
    padding:20px;
  }
  .closeButton {
    width: 56px;
    height: 56px;
    background: #fff;
    border:none;
    outline: none;
  }
  main {
    position: absolute;
    bottom:62px;
  }
  .comments {
    width: 40%;
    display: block;
  }
  .comment {
    margin-top:20px;
    border-radius:4px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.5);
    margin-left:20px;
    overflow: auto;
    width:500px;
  }
  .myComment {
    width:38%;
    margin-top:20px;
    border-radius:4px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.5);
    margin-left:20px;
    background: #2962ff73;
    position: fixed;
    left:58%;
  }
  .commentHeader {
    padding: 10px;
    font-family: roboto;
    font-size: 12px;
    font-weight: bold;
    padding-left:20px;
  }
  .CommentBody {
    font-family: roboto;
    font-size: 12px;
    padding-left:20px;
    padding-bottom: 10px;


  }
  .textbox {
    width: 100%;
    height:56px;
    display: flex;
    position: fixed;
    bottom:0;
      border-top:1px solid grey;
  }
  .inputText {
    width: 90%;
    height:56px;
    border:none;
    background: #fff;
    padding-left: 15px;
  }
  .submitText {
    width: 10%;
    height:56px;
    border: none;
    background: #2962ff;
    color: #fff;
    font-family: roboto;
    text-transform: uppercase;
    font-size: 14px;
    position: absolute;
    padding-left: -5px;
  }
  form {
    width: 100%;
  }
  </style>
</head>
<body>
<header>
  <p>Comments</p>
  <button class="closeButton" onclick="window.location.href='http://localhost/pichub'">

<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
  </button>
</header>

<main>
  <?php
  $con = mysql_connect("localhost", "root","");
  $db = mysql_select_db("pichub", $con);
  if(!($_COOKIE["auth"]=="true")) {
    header("Location: http://localhost/pichub");
  }
  // TODO:  get post  id
  $pid = $_GET["pi"];
  // TODO: get comment id
  $u = $_COOKIE["u"];

  $o = mysql_query("select*from comment where postID='$pid'");
  if(mysql_num_rows($o)>0) {
    while($row=mysql_fetch_array($o)) {
      $uid = $row['userID'];
      $comment = $row['comment'];
echo   "<div class='comments'>";
  if($uid==$u) {
    echo  "<div class='myComment'>
        <div class='commentHeader'>
            echo $uid;
        </div>
        <div class='CommentBody'>
          $comment;
        </div>
      </div>";
  }
  else {
      $m = mysql_query("select * from user where userID='$uid'");
  echo   "<div class='comment'>
      <div class='commentHeader'>";

      if(mysql_num_rows($m)>0) {
        while($r=mysql_fetch_array($m)) {
          $name = $r['userFname'];
        }
      }

      echo " $name</div>
      <div class='CommentBody' style=' word-wrap: break-word;'>
        $comment
      </div>
    </div>
  </div>";
}


  }
  }
  else {

  }
?>
</main>
<div class="textbox">
  <form action="submitComment.php?pid=<?php echo $pid ?> &uid=<?php echo $u ?> &ret=http://localhost/pichub/comments.php?pi=<?php echo $pid ?>" method="post">
  <input type='text' name="comment" placeholder="Write Comment." class="inputText">
  <button type="submit" class="submitText">

    <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
        <path d="M0 0h24v24H0z" fill="none"/>
    </svg>
  </button>
</form>
</div>
</body>
</html>
