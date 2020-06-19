<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
      <title>Pichub</title>
      <link rel="stylesheet" href="master.css">
      <link rel="stylesheet" href="other.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <style>

      main {
        width: 100%;
      }
      .upload {
        width:44%;
        padding:10px;
        display: flex;
        background: #fff;

        border-radius: 2px;
        margin:0 auto;
        height:60px;
        margin-top:20px;
        justify-content: space-around;
          box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.2);
          border-radius: 4px;
      }
      .upload > button{
        width: 56px;
        height: 56px;
        border: none;
        background: transparent;
      }
       input[type="file"] {
        width: 56px;
        height: 56px;
        opacity: 0;

      }
      .upload > button:hover {
          border-radius: 49%;
          background: rgba(0,0,0,0.1);
      }
      .userWall  {
        width: 46%;
        display: block;
        margin: 0 auto;
      }
      .particularPost {
        width: 100%;
        display: table;
        background: #fff;
        box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.2);
        border-radius:4px;
        margin-top:20px;
      }
      .particularPost > header {
        padding:20px;
        display: flex;
      }
      header > img {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: baseline;
      }
      header > p {
        font-family: roboto;
        font-size:14px;
        margin-top:4px;
        margin-left: 10px;
      }
      .ui {
        width: 100%;
      }
      .img {
        max-width: 100%;
        margin-left:8%;
      }
      .feeling {
        width: 90%;
        padding:10px;
        display: flex;
        margin-left: auto;

      }
      .liked, .comment, .share {
        width: 45%;
        padding:10px;
        display: flex;
      }
      .comment {
        margin-left:45px;

      }

      a {
        text-decoration: none;
      }
      .bg {
        position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height:100vh;
        display: none;
      }
      dialog {
        width: 50%;
        padding:20px;
        border:none;
        box-shadow: 0px 5px 10px 0 rgba(0,0,0,0.5);
        transition: all 5s;
        position: fixed;
        top:50%;
        transform: translateY(-50%);
      }
      </style>
  </head>
  <div class="bg">

  </div>
  <body>

    <?php

    $v= $_COOKIE["auth"];
    if ($v=="true") {

    }
    else {
      header('Location: http://localhost/pichub/?ref');
    }

    /*  if ($_COOKIE['auth']=="false") {
        header('Location: ./index.php?ref');
      }
      else {
          //header('Location: ./index.php?ref');
      }*/
     ?>
    <header class="header">
      <div class="header_inner">
        <div class="header_inner_title">
          Pichub
        </div>
      <div class="searchbar">
          <form action="search.php" class="form" role="form">
              <button class="searchBtn" role="button">

                       <svg focusable="false" class="s" height="24px" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="#fff"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
               </button>
               <button class="closeBtn">
                       <svg focusable="false" height="24px" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path></svg>
               </button>
                       <input class="search searchbr" aria-label="Find friends" autocomplete="off" placeholder="Find friends" value="" name="q" role="combobox" type="text" aria-autocomplete="list" aria-haspopup="false" aria-expanded="false">
           </form>
      </div>
      <nav class="nav" role="navigation">
        <a href="#" role="link"  title="Home" data-tooltip="Home">
          <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
        <a href="friend.php" role="link" title="Request">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve" class=""><g><g>
	             <g id="notifications-none">
		               <path d="M255,510c28.05,0,51-22.95,51-51H204C204,487.05,226.95,510,255,510z M420.75,357V216.75    c0-79.05-53.55-142.8-127.5-160.65V38.25C293.25,17.85,275.4,0,255,0c-20.4,0-38.25,17.85-38.25,38.25V56.1    c-73.95,17.85-127.5,81.6-127.5,160.65V357l-51,51v25.5h433.5V408L420.75,357z M369.75,382.5h-229.5V216.75    C140.25,153,191.25,102,255,102s114.75,51,114.75,114.75V382.5z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#768fff"/>
	                </g>
                </g></g> </svg>

        </a>
        <a href="account.php" role="link" title="Account">
          <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="#768fff"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
      </nav>
    </div>
    </header>
    <main>

      <div class="upload">
        <div class="cam">



          <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" style="margin-top:15px;">
              <circle cx="12" cy="12" r="3.2"/>
              <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
              <path d="M0 0h24v24H0z" fill="none"/>
          </svg>

        </div>

        <div class="gal">
          <form class="" action="imageUpload.php" method="POST" enctype="multipart/form-data">

            <input type="file" onchange="readURL(this);" accept="image/*"  id="sg" name="p">
          <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" style="margin-top:15px;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/>
          </svg>
          <dialog id="sel">

          <!--  <img id="blah" src="#" alt="your image" /> -->
          <header style="width:100%;padding:5px;">
            <p style="color:#000;">Choosed image</p>

          </header>
          <main>
            <img id="blah" src="#" alt="your image" style="max-width:100%;"/>
          </main>

          <button type="submit">UPLOAD</button>
          </dialog>
          </form>

        </div>
      </div>
      <div class="userWall">
        <?php
        $con = mysql_connect("localhost","root","");
        $db = mysql_select_db("pichub", $con);
        $uid = $_COOKIE['u'];

        $pl = mysql_query("select*from otherpost where userID='$uid' order by Time desc;");

        if(mysql_num_rows($pl)>0) {
          while($row = mysql_fetch_array($pl)) {
          $picture=$row['postSrc'];
          $owner=$row['postOfUserId'];
          $postID = $row['postID'];
          $lq = mysql_query("select*from liked where postID='$postID'");
          $likes = mysql_num_rows($lq);
          $cq = mysql_query("select*from comment where postID='$postID'");
          $comments = mysql_num_rows($cq);
          $getUserName = mysql_query("select*from user where userID='$owner'");
          while($sq = mysql_fetch_array($getUserName)) {
              $firstName=$sq['userFname'];
              $lastName=$sq['userLname'];
              $profile = $sq['userProfile'];
          }
        echo "<div class='particularPost'>
          <header>
            <img src='$profile' alt='User Profile' style='width:24px; height:24px;'>
            <p>$firstName $lastName</p>
          </header>
          <div class='ui'>
            <img class='img' src='$picture' alt='Image' width='80%;'>
          </div>
          <div class='feeling'>";
          $l = mysql_query("select '$postID' from liked where userID='$uid' and postID='$postID'");
          $c = mysql_query("select * from liked where postID='$postID'");
          $count = mysql_num_rows($c);

          if(mysql_num_rows($l)<=0) {
            echo "

          <a href='http://localhost/pichub/like.php?pi=$postID'>
          <span style='    position: relative;top: 35px;'>
          <svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
              <path d='M0 0h24v24H0z' fill='none'/>
              <path d='M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z'/>
          </svg>
          </span></a>";
          }
          else {
            echo "<span style='    position: relative;top: 35px;'>
          <a href='http://localhost/pichub/unlike.php?pi=$postID'>

<svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
  <path d='M0 0h24v24H0z' fill='none'/>
  <path d='M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z'/>
</svg>
      </span>
        </a>

        ";
          }
            echo   "<span style='position:relative;top:35px;margin-left:5px;'>$likes</span>

            <span class='comment' style='position:relative;top:25px;left:170px;'>
              <a href='http://localhost/pichub/comments.php?pi=$postID'>

              <svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z'/>
                  <path d='M0 0h24v24H0z' fill='none'/>
              </svg>
              </a>
                <p style='position:relative;top:-14px;left:4px;'> $comments</p>

            </span>
            <div class='share' style='position:relative;top:22px;left:60px;'>
              <a href='#'>

              <svg viewBox='0 0 24 24' height='24' width='100%'><path class='Ce1Y1c' d='M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7 l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z'></path></svg>
              </a>


            </div>
          </div>
        </div>
        ";
      }}else {echo "<!-- <div style=''><img src='https://cdn.dribbble.com/users/447827/screenshots/2167614/tropical.gif' style='width:300px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%); '></img>--><center style='padding-top:40%;'>No post found.</center></div>";}
        ?>
        <!-- -->

      </div>
    </main>
    <script type="text/javascript">
    var bg = document.querySelector(".bg");
      document.getElementById("sg").addEventListener("change", function() {
        console.log(File.name);
        document.getElementById("sel").open = true;

      })
      function readURL(input) {

       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah')
                   .attr('src', e.target.result)
                   .width(150)
                   .height(200);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
