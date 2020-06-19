<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
      <title>Pichub</title>
      <link rel="stylesheet" href="master.css">
      <link rel="stylesheet" href="other.css">
      <style>
      main {
        width: 100%;
      }
      body {
        overflow-x: hidden;
        outline-style: none;
      }
      main {
        width: 100%;
        height: auto;
        background: #2962ff;
        padding:20px;
        height:300px;
      }
      .editDialog {
        width: 50%;
        padding:10px 20px;
        border-radius: 2px;
        background: #fff;
        margin-left: auto;
        margin-right: auto;
        margin-top:50px;
        box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
        height: 450px;
      }
      .editDialog > p {
        color: #000;
        font-family: roboto;
        font-size: 20px;

      }
      .chooseImage {
        width: 150px;
        height: 150px;
        background: #bgbgbg;
        justify-content: center;
        align-items: center;
        border: none;
        margin-top: 50px;
      }
      .chooseImage > p {
        font-size: 16px;
        font-family: roboto;
        text-align: center;
        margin-top:-100%;
      }
      input {
        border: 1px solid blue;
        border-radius: 2px;
        width: 100px;
        padding:5px;
        font-family: roboto;
        width: 200px;
        outline: none;
      }
      .btns {
        width: 30%;
        display: flex;
        justify-content: flex-end;
      }
      button[type=submit] {
        width: 111px;
        border:none;
        height:42px;
        font-family: roboto;
        font-size: 14px;
        background: #2962ff;
        color: #fff;
        border-radius: 3px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.2);
        position: relative;
        top:0px;
        font-weight: bold;
        left:220%;
      }
      button[type=submit]:hover {
        box-shadow: 0 10px 50px 0 rgba(0,0,0,0.2);
      }
      #toast {
        display: none;
      }
      </style>
    </head>
    <body>
      <body>
        <?php
          if (isset($_COOKIE['u'])) {

          }
          else {
              header('Location: ./index.php?ref');
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
             <a href="home.php" role="link"  title="Home" data-tooltip="Home">
               <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                 <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="#768fff"/>
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
           <?php
           $con = mysql_connect("localhost","root","");
           $db = mysql_select_db("pichub",$con);
           $uid=$_COOKIE['u'];
           $q=mysql_query("select*from user where userID='$uid'");
           while($r=mysql_fetch_array($q)) {
             $userFirstName = $r['userFname'];
             $userLastName = $r['userLname'];
             $userWeb = $r['userWeb'];
             $userCity = $r['userCity'];
             $userEmail = $r['userEmail'];
             $userTel = $r['userTel'];
             $userBio = $r['userBio'];
             $userProfile=$r['userProfile'];

           }
           $id=$_COOKIE['u'];
           ?>
           <div class="editDialog">
             <p>Edit Profile</p>

             <form class="" action="update.php" method="post" enctype="multipart/form-data">
               <button class="chooseImage">

                 <input type="file" name="p" id="userP" style="width:150px;height:150px;opacity:0;">
                 <p>Update Profile</p>
               </button>
               <input type="text" name="firstName" value="<?php echo $userFirstName; ?>"style="position:relative;top:-80px;left:8%;" placeholder="First name">
                <input type="text" name="lastName" value="<?php echo $userLastName; ?>"style="position:relative;top:-80px;left:10%;margin-left:30" placeholder="Last name">
                 <input type="text" name="tel" value="<?php echo $userTel; ?>" style="position:relative;top:-140px;left:30%;" placeholder="Mobile no">
                  <input type="text" disabled name="email" value="<?php echo $userEmail; ?>" style="position:relative;top:-140px;left:32%;" placeholder="Email">
                  <input type="text" name="city" value="<?php echo $userCity; ?>"style="position:relative;top:-90px;left:-33%;" placeholder="City">
                   <input type="url" name="web" value="<?php echo $userWeb; ?>" style="position:relative;top:-75px;left:30%;" placeholder="Web">
                   <input type="text" name="bio" value="<?php echo $userBio; ?>" style="position:relative;top:-118px;left:32%;" placeholder="Bio">
                   <input type="hidden" name="id" value="<?php $id ?>">
                    <span name="id" value="<?php echo $id; ?>" style="position:relative;top:-72px;left:3%;">ID: <?php echo $id; ?> </span>
                    <div class="btns">
                      <button type="submit" name="button">UPDATE</button>
             </form>

                    </div>
           </div>
         </main>
         <div id="toast" style="position:absolute;left:75%;top:8%;width:20%;padding:2px;background:rgba(0,0,0,0.9);border-radius:4px;" class="toast">

           <p style="padding-left:20px;color:#fff"> Image selected!</p>
         </div>
         <script type="text/javascript">
         // get an element
         let p = document.getElementById("userP");
         p.addEventListener("change", function() {

           document.getElementById("toast").style="display:block";
         });
         </script>
         <script src="js/main.js" charset="utf-8"></script>
    </body>
    </html>
