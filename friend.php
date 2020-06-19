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
      .notification {
        width: 90%;
        background: #fff;
        padding:5px;
        padding-left: 25px;
        margin-top:20px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.5);
        display: flex;
        flex-wrap: wrap;
      }
      .notification:hover {

        box-shadow: 0 5px 10px 0 rgba(0,0,0,0.5);
      }
      .noNotification {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      </style>
  </head>
  <body>
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
        <a href="#" role="link">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve" class=""><g><g>
             <g id="notifications-none">
                 <path d="M255,510c28.05,0,51-22.95,51-51H204C204,487.05,226.95,510,255,510z M420.75,357V216.75    c0-79.05-53.55-142.8-127.5-160.65V38.25C293.25,17.85,275.4,0,255,0c-20.4,0-38.25,17.85-38.25,38.25V56.1    c-73.95,17.85-127.5,81.6-127.5,160.65V357l-51,51v25.5h433.5V408L420.75,357z M369.75,382.5h-229.5V216.75    C140.25,153,191.25,102,255,102s114.75,51,114.75,114.75V382.5z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#fff"/>
                </g>
              </g></g> </svg>

        </a>
        <a href="account.php" role="link">
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
      $db = mysql_select_db("pichub", $con);
      $uid = $_COOKIE["u"];
      $q = mysql_query("select*from notification where userID='$uid'");
      if(mysql_num_rows($q)>0) {
        while($row=mysql_fetch_array($q)) {
          $user = $row['refID'];
          $o = mysql_query("select * from user where userID='$user'");
          while ($r=mysql_fetch_array($o)) {
            $first=$r['userFname'];
            echo "<div class='notification'>
              <p> <span style='position:relative;top:5px;'><svg fill='#000000' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M0 0h24v24H0z' fill='none'/>
                  <path d='M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z'/>
              </svg> </span> <span style='padding-left:10px;'>$first started following with you.</p></p>
            </div>";
          }

    }
    }
    else {
      echo "<div class=noNotification>No notification found.</div>";
    }
      ?>

      <!--  -->
    </main>
      <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
