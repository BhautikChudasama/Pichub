<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Pichub</title>
      <link rel="stylesheet" href="master.css">
      <link rel="stylesheet" href="styles/account.css">
      <style>
      body {
        overflow-x: hidden;
      }
      main {
        width: 100%;
        height: auto;
      }
      .profile_main {
        width: 100%;
        display: block;
      }
      .profile-cover {
        width: 100%;
        height:442px;
        display: flex;
        justify-content: flex-start;
        background: #fc00ff;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
      .profile-user-cover {
        width: 150px;
        height: 150px;
        background: #fff;
        display: flex;
        align-items: center;
        border:2px solid #fff;
        position: absolute;
        margin-top: 18%;
        margin-left: 50px;
      }
      .userRealProfile {
        max-width: 100%;
        width: 150px;
        height: 150px;
      }
      .userName {
        font-family: roboto;
        font-size: 22px;
        color:#000;
        position: relative;
        left:20%;
        top:64%;
      }
      .navInfo {
        width: 80%;
        height: 62px;
        display: flex;
        justify-content: flex-end;
        position: relative;
        top:65%;

      }
      .follower {
            margin-left:20px;
            position: relative;
            right: -50px;
      }
      .followers {
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.4);
        color: #000;
        height: 48px;
        width: 142px;
        border: none;
        background: #fff;
        font-weight: bold;
        font-family: roboto;
        font-size: 14px;
      }
      .followers:hover {
          box-shadow: 0 5px 10px 0 rgba(0,0,0,0.4);
      }
      .collection {
        width: 92%;
        margin-left: auto;
        margin-right: auto;
        background:#fff;
        margin-top: 5%;
        flex-wrap: wrap;
      }
      .images {
        width: 100%;
        display: flex;
      }
      .image {
        width: 250px;
        height: 300px;
        box-shadow: 0px 2px 5px 0 grey;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left:40px;
        border-radius: 4px;
      }
      .panel {
        padding: 5px;
        margin-left:40px;
      }
      .image:hover {
        box-shadow: 0 5px 10px 0 grey;
      }
      .logout {
        width: 56px;
        height: 56px;
        border: 0;
        background: 0;
        position: absolute;
        right:0;
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
      a {
        text-decoration: none;
        color: #000;
      }
      </style>
  </head>
  <body>
    <?php
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("pichub",$con);
    $uid=$_COOKIE['u'];
    $q=mysql_query("select*from user where userID='$uid'");
    while($r=mysql_fetch_array($q)) {
      $userFirstName = $r['userFname'];
      $userLastName = $r['userLname'];
      $userFollowing = $r['Following'];
      $userFollower = $r['Follower'];
      $userProfileSource = $r['userProfile'];
    }
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
        <a href="home.php" role="link" >
          <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="#768fff"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
        <a href="friend.php" role="link">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve" class=""><g><g>
             <g id="notifications-none">
                 <path d="M255,510c28.05,0,51-22.95,51-51H204C204,487.05,226.95,510,255,510z M420.75,357V216.75    c0-79.05-53.55-142.8-127.5-160.65V38.25C293.25,17.85,275.4,0,255,0c-20.4,0-38.25,17.85-38.25,38.25V56.1    c-73.95,17.85-127.5,81.6-127.5,160.65V357l-51,51v25.5h433.5V408L420.75,357z M369.75,382.5h-229.5V216.75    C140.25,153,191.25,102,255,102s114.75,51,114.75,114.75V382.5z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#768fff"/>
                </g>
              </g></g> </svg>
        </a>
        <a href="#" role="link">
          <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </a>
      </nav>
    </div>
    </header>
    <main>
      <div class="profile_main">
        <div class="profile-cover">
          <a href="logout.php">
          <button type="button" class="logout" name="button">

<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 3.01H3c-1.1 0-2 .9-2 2V9h2V4.99h18v14.03H3V15H1v4.01c0 1.1.9 1.98 2 1.98h18c1.1 0 2-.88 2-1.98v-14c0-1.11-.9-2-2-2zM11 16l4-4-4-4v3H1v2h10v3z"/>
</svg>
          </button>
          </a>
          <div class="profile-user-cover">
            <img src="<?php echo $userProfileSource ?>" alt="Profile" class="userRealProfile">
          </div>
          <p class="userName"><?php echo $userFirstName." ".$userLastName; ?></p>
          <div class="navInfo">
            <div class="follower">
              <button type="button" name="button" class="followers"><?php echo $userFollower; ?></button>
                <p style="font-size:14px;text-align:center;font-weight:500;">Followers</p>
            </div>
            <div class="follower">
              <button type="button" name="button" class="followers"><?php echo $userFollowing; ?></button>
                <p style="font-size:14px;text-align:center;font-weight:500;">Following</p>
            </div>
            <div class="follower">
              <button type="button" name="button" class="followers" onclick="window.location.href='http://localhost/pichub/editProfile.php?f=ac'">EDIT PROFILE</button>
            </div>
          </div>
        </div>
      </div>
      <dialog id="sel">
      <!--  <img id="blah" src="#" alt="your image" /> -->
      <form action="imageUpload.php" enctype="multipart/form-data" method="POST">
      <main>
        <img id="blah" src="#" alt="your image" style="max-width:100%;"/>
      </main>

      <button type="submit" id="btnUpload" >UPLOAD</button>
    </form>
      </dialog>
      </form>

      <p style="font-size:18px; font-family:roboto;position:relative;left:36px;top:28px;">My photos</p>
      <div class="collection" style="padding:20px;display:flex;">

        <?php

          $q = mysql_query("select*from ownPost where userID='$uid'");
          if (mysql_num_rows($q)>0) {
            while ($row=mysql_fetch_array($q)) {
              $postSrc = $row["postSrc"];
              $liked = $row["likes"];
              $comments = $row["comments"];
              $getPostId = $row["postID"];
              echo "<div>";
                echo "<img src='$postSrc' alt=image style='max-width:100%;' class=image>";
                $l = mysql_query("select '$postSrc' from liked where userID='$uid'");
                $c = mysql_query("select * from liked where postID='$getPostId'");
                $count = mysql_num_rows($c);
                echo "<div class='panel' style='margin-top:10px;'>";
                if(mysql_num_rows($l)<=0) {
                  echo "<span class='unlike'>
                  <a href='http://localhost/pichub/likes.php?pi=$getPostId'>
                <svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M0 0h24v24H0z' fill='none'/>
                    <path d='M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z'/>
                </svg>
                </a>
                </span>";
                }
                else {
                  echo "<span class='liked'>
                <a href='http://localhost/pichub/unlike.php?pi=$getPostId'>

    <svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
        <path d='M0 0h24v24H0z' fill='none'/>
        <path d='M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z'/>
    </svg>
              </a>";
                }

            echo "</span>
                <span style='position:relative;top:-5px;'>$count</span>

                <span style='margin-left:50px;'> </span>
                <a href='http://localhost/pichub/comments.php?pi=$getPostId'><svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z'/>
                    <path d='M0 0h24v24H0z' fill='none'/>
                </svg> <span style='position:relative;top:-5px;'>$comments</span></a>
                <span style='margin-left:70px;'> </span>
                <a href='http://localhost/pichub/deletepost.php?pi=$getPostId'>
                <svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z'/>
                    <path d='M0 0h24v24H0z' fill='none'/>
                </svg>
                </a>
                </div></div>";


            }
          }


      ?>
      </div>
      <p style="text-align:center;padding:25px;">LOOKS LIKE YOU HAVE REACH END.</p>
    </main>
    <script>

      document.getElementById("sg").addEventListener("change", function() {

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
           document.getElementById('btnUpload').style="z-index:1";
           reader.readAsDataURL(input.files[0]);
       }
   }
   </script>
      <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
