<!--

Copyright 2020 Bhautik Chudasama

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Welcome to Pichub</title>
    <link rel="shortcut icon" href="images/smallLogo.png">
    <link rel="stylesheet" href="main.css">
    <script src="offline/jquery.js"></script>
    <meta name="theme-color" content="#2962ff">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
    <style>
    #snackbar {
      visibility: hidden;
        padding:15px 40px;
        background: black;
        font-family:roboto;
        font-size:14px;
        margin:0 auto;
        position: fixed;
        color:white;
        left: 50%;
        transform: translate(-50%,0);
        border-radius: 4px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 1s;

    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }



    </style>
  </head>
  <body>
    <script>

    </script>
    <?php
    if (isset($_COOKIE['u'])) {
      if ($_COOKIE['auth']=="true") {
        # code...
        header("Location:http://localhost/pichub/home.php");
      }

    }

    ?>

     <!-->
     <div class="ph-container">
       <!--searchbar-->

         <!--end-->
       <div class="ph-heading">
         <div class="ph-heading-text">
           Pichub
         </div>
         <div class="ph-sidebar">
           <div class="ph-sidebar-inner">

          <button class="ph-sidebar-feedbackbutton">
             <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
               <path d="M0 0h24v24H0z" fill="none"/>
               <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM8 14H6v-2h2v2zm0-3H6V9h2v2zm0-3H6V6h2v2zm7 6h-5v-2h5v2zm3-3h-8V9h8v2zm0-3h-8V6h8v2z"/>
             </svg>
           </button>
           <!--
         <a href="./help">
           <button class="ph-sidebar-helpbutton">
            <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/>
            </svg>
          </button>
        </a>
      -->
         </div>
       </div>
      </div>
      <div class="ph-navbar">
        <div class="ph-navbar-main">
          <a href="#">
            <button type="button" name="button" class="ph-navbar-home">HOME</button>
          </a>
          <a href="#">
            <button type="button" name="button" class="ph-navbar-signin">SIGNIN</button>
          </a>
          <a href="#">
            <button type="button" name="button" class="ph-navbar-signup">SIGNUP</button>
          </a>
          <div class="ph-navbar-line"></div>
        </div>
      </div>
      <div class="ph-searchbar">
        <div class="ph-searchbar-text">

          </div>
          <div class="ph-searchbar-outer">
            <form action="./search" method="GET">
            <button class="ph-open-searchbutton" type="button" name="button">
              <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
            </button>
            <input type="text" name="q" value="" class="ph-open-searchbar" autofocus="true" placeholder="Find peoples..">
            <button type="button" name="button" class="ph-close-button">
              <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
            </button>
          </form>
          </div>
        </div>


        <div id="home">
          <div class="temp2">
            <div class="temp3">
              <div class="temp4">
        <div id="ph-home">
          <div class="ph-home-first">
            <div class="ph-home-first-description">
              Pichub enables you to always touch with your friends and relatives and also you to share your photo with secure way and easily.
            </div>
            <img src="images/role_of_functional_animation_1x.png" alt="Connect with your friends and relatives" class="ph-home-first-image">
          </div>

          <div class="ph-features">
            <div class="ph-features-main">
              <div class="ph-features-heading">
                Our Risponciblities
              </div>
              <div class="ph-features-line"></div>

              <button class="ph-features-intigrity" onclick="alert('AVAILABLITY means your information you can access anytime, anyware.')">
                AVAILABLITY
              </div>
              <button class="ph-features-encryption" onclick="alert('ENCRYPTION means your information like password must be be encrypted. So any intelligible person can not read your infoemation.')">
                ENCRYPTION
              </div>
              <button class="ph-features-security" onclick="alert('SECURITY means your information must be secure for different attack.')">
                SECURITY
              </div>
              <button class="ph-features-speed" onclick="alert('SPEED means our site take a bit of time to load on your browser.')">
                SPEED
              </div>
              <img src="images/child-mobo.png" alt="Features" class="ph-features-image">
            </div>
          </div>

    <div class="ph-facility">
      <div class="ph-facility-main">
        <div class="ph-facility-header">
          Our Facility
        </div>
        <div class="ph-facility-line"></div>
        <div class="ph-facility-first">
          <div class="ph-facility-first-description">
            <div class="ph-facility-first-description-account">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                <path d="M35.62 8.94c-.16 0-.31-.04-.46-.11C31.33 6.85 28 6 24.02 6c-3.97 0-7.71.95-11.14 2.82-.49.26-1.09.09-1.36-.4-.26-.49-.09-1.09.4-1.36C15.65 5.03 19.72 4 24.02 4c4.26 0 7.98.94 12.06 3.05.49.25.68.86.43 1.35-.18.34-.53.54-.89.54zM7 19.44c-.2 0-.4-.06-.58-.18-.45-.32-.56-.94-.24-1.39 1.98-2.8 4.51-5 7.51-6.55 6.29-3.25 14.33-3.26 20.63-.02 2.99 1.54 5.51 3.72 7.5 6.5.32.45.22 1.07-.23 1.39-.45.32-1.08.22-1.4-.23-1.8-2.52-4.08-4.5-6.78-5.88-5.74-2.95-13.07-2.94-18.8.02-2.71 1.4-5 3.39-6.79 5.93-.2.27-.51.41-.82.41zm12.51 24.13c-.26 0-.51-.1-.71-.3-1.73-1.75-2.67-2.86-4.02-5.27-1.38-2.46-2.11-5.47-2.11-8.69 0-5.94 5.08-10.78 11.33-10.78s11.33 4.83 11.33 10.78c0 .55-.45 1-1 1s-1-.45-1-1c0-4.84-4.18-8.78-9.33-8.78-5.14 0-9.33 3.94-9.33 8.78 0 2.88.64 5.54 1.85 7.71 1.29 2.3 2.15 3.29 3.69 4.84.39.39.39 1.03-.01 1.41-.18.21-.44.3-.69.3zm14.33-3.7c-2.38 0-4.47-.6-6.2-1.77-2.97-2.02-4.75-5.3-4.75-8.78 0-.55.45-1 1-1s1 .45 1 1c0 2.81 1.45 5.47 3.88 7.12 1.41.96 3.07 1.43 5.07 1.43.48 0 1.29-.05 2.09-.19.54-.1 1.06.27 1.16.81.1.54-.27 1.06-.81 1.16-1.17.21-2.16.22-2.44.22zM29.81 44c-.09 0-.18-.01-.26-.04-3.19-.87-5.27-2.05-7.43-4.2-2.79-2.78-4.33-6.49-4.33-10.44 0-3.25 2.76-5.89 6.16-5.89 3.4 0 6.16 2.64 6.16 5.89 0 2.14 1.87 3.89 4.16 3.89s4.16-1.74 4.16-3.89c0-7.54-6.5-13.67-14.49-13.67-5.69 0-10.88 3.16-13.22 8.06-.78 1.62-1.17 3.51-1.17 5.61 0 1.56.14 4.02 1.33 7.21.19.52-.07 1.09-.59 1.29-.52.19-1.09-.07-1.29-.59-.98-2.63-1.46-5.21-1.46-7.91 0-2.4.46-4.58 1.37-6.47 2.67-5.58 8.57-9.19 15.02-9.19 9.09 0 16.49 7.03 16.49 15.67 0 3.25-2.77 5.89-6.16 5.89s-6.16-2.64-6.16-5.89c0-2.14-1.87-3.89-4.16-3.89s-4.16 1.74-4.16 3.89c0 3.41 1.33 6.62 3.74 9.02 1.89 1.88 3.73 2.92 6.55 3.69.53.15.85.7.7 1.23-.12.44-.52.73-.96.73z" fill="grey"/>
                <path fill="none" d="M0 0h48v48H0z"/>
              </svg>
              <div class="ph-facility-first-description-account-title">
                One Touch
              </div>
            </div>
            <div class="ph-facility-first-description-like">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                <path d="M0 0h48v48H0z" fill="none"/>
                <path d="M33 6c-3.48 0-6.82 1.62-9 4.17C21.82 7.62 18.48 6 15 6 8.83 6 4 10.83 4 17c0 7.55 6.8 13.72 17.1 23.07L24 42.7l2.9-2.63C37.2 30.72 44 24.55 44 17c0-6.17-4.83-11-11-11zm-8.79 31.11l-.21.19-.21-.19C14.28 28.48 8 22.78 8 17c0-3.99 3.01-7 7-7 3.08 0 6.08 1.99 7.13 4.72h3.73C26.92 11.99 29.92 10 33 10c3.99 0 7 3.01 7 7 0 5.78-6.28 11.48-15.79 20.11z" fill="#EA4335"/>
              </svg>
              <div class="ph-facility-first-description-like-title">
                Like
              </div>
            </div>
            <div class="ph-facility-first-description-no-download">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                <path d="M38 18h-8V6H18v12h-8l14 14 14-14zM10 36v4h28v-4H10z" fill="#4285F4"/>
                <path d="M0 0h48v48H0z" fill="none"/>
              </svg>
              <div class="ph-facility-first-description-no-download-title">
                No download require
              </div>
            </div>
            <div class="ph-facility-first-description-upload">

  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><circle cx="24" cy="24" r="6.4" fill="grey"/><path d="M18 4l-3.66 4H8c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h32c2.21 0 4-1.79 4-4V12c0-2.21-1.79-4-4-4h-6.34L30 4H18zm6 30c-5.52 0-10-4.48-10-10s4.48-10 10-10 10 4.48 10 10-4.48 10-10 10z" fill="silver"/></svg>
                <div class="ph-facility-first-description-upload-title">
                  Upload your photo
                </div>
            </div>
            <div class="ph-facility-first-description-notification">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="#FBBC05" d="M24 44c2.21 0 4-1.79 4-4h-8c0 2.21 1.79 4 4 4zm12-12V22c0-6.15-3.27-11.28-9-12.64V8c0-1.66-1.34-3-3-3s-3 1.34-3 3v1.36c-5.73 1.36-9 6.49-9 12.64v10l-4 4v2h32v-2l-4-4zm-4 2H16V22c0-4.97 3.03-9 8-9s8 4.03 8 9v12z" /></svg>
              <div class="ph-facility-first-description-notification-title">
                Notifications
              </div>
            </div>
          </div>
          <img src="images/phone_notification-01_1x.png" alt="Phone notification" class="ph-facility-first-image"></img>
        </div>
      </div>
    </div>
    <div class="ph-creator">
      <div class="ph-creator-main">
        <img src="images/image_1x.png" alt="Kevin" class="ph-creator-head"></img>
        <div class="ph-creator-head-description">
          Levin create this blog. Thanks for watching us.
        </div>
      </div>
    </div>
    <div class="ph-followon">
      <div class="ph-followon-main">
        <a href="#" class="ph-followon-facebook">
          <svg class="svgIcon-use" width="50px" height="50px" viewBox="0 0 25 25"><path d="M21 12.646C21 7.65 16.97 3.6 12 3.6s-9 4.05-9 9.046a9.026 9.026 0 0 0 7.59 8.924v-6.376H8.395V12.64h2.193v-1.88c0-2.186 1.328-3.375 3.267-3.375.93 0 1.728.07 1.96.1V9.77H14.47c-1.055 0-1.26.503-1.26 1.242v1.63h2.517l-.33 2.554H13.21V21.6c4.398-.597 7.79-4.373 7.79-8.954" fill="#3b5998"></path></svg>
        </a>
        <a href="#" class="ph-followon-google-plus">
          <svg class="svgIcon-use" width="50px" height="50px" viewBox="0 0 25 25"><g fill="none" fill-rule="evenodd"><path d="M20.66 12.693c0-.603-.054-1.182-.155-1.738H12.5v3.287h4.575a3.91 3.91 0 0 1-1.697 2.566v2.133h2.747c1.608-1.48 2.535-3.65 2.535-6.24z" fill="#4285F4"></path><path d="M12.5 21c2.295 0 4.22-.76 5.625-2.06l-2.747-2.132c-.76.51-1.734.81-2.878.81-2.214 0-4.088-1.494-4.756-3.503h-2.84v2.202A8.498 8.498 0 0 0 12.5 21z" fill="#34A853"></path><path d="M7.744 14.115c-.17-.51-.267-1.055-.267-1.615s.097-1.105.267-1.615V8.683h-2.84A8.488 8.488 0 0 0 4 12.5c0 1.372.328 2.67.904 3.817l2.84-2.202z" fill="#FBBC05"></path>
          <path d="M12.5 7.38c1.248 0 2.368.43 3.25 1.272l2.437-2.438C16.715 4.842 14.79 4 12.5 4a8.497 8.497 0 0 0-7.596 4.683l2.84 2.202c.668-2.01 2.542-3.504 4.756-3.504z" fill="#EA4335"></path></g></svg>
        </a>
        <a href="#" class="ph-followon-twitter">
          <svg class="svgIcon-use" width="50px" height="50px" viewBox="0 0 25 25"><path d="M21.725 5.338c-.744.47-1.605.804-2.513 1.006a3.978 3.978 0 0 0-2.942-1.293c-2.22 0-4.02 1.81-4.02 4.02 0 .32.034.63.07.94-3.31-.18-6.27-1.78-8.255-4.23a4.544 4.544 0 0 0-.574 2.01c.04 1.43.74 2.66 1.8 3.38-.63-.01-1.25-.19-1.79-.5v.08c0 1.93 1.38 3.56 3.23 3.95-.34.07-.7.12-1.07.14-.25-.02-.5-.04-.72-.07.49 1.58 1.97 2.74 3.74 2.8a8.49 8.49 0 0 1-5.02 1.72c-.3-.03-.62-.04-.93-.07A11.447 11.447 0 0 0 8.88 21c7.386 0 11.43-6.13 11.414-11.414.015-.21.01-.38 0-.578a7.604 7.604 0 0 0 2.01-2.08 7.27 7.27 0 0 1-2.297.645 3.856 3.856 0 0 0 1.72-2.23" fill="#0084b4"></path></svg>
        </a>
      </div>
    </div>
    <center class="ph-love">Pichub
</center>
<center class="ph-love-tagline">ALWAYS CONNECT</center>
<div class="ph-lastspace">&nbsp;</div>

</div>
<div id="signin">
  <div class="ph-signin-main">
    <div class="ph-signin-text">
      Signin
    </div>
    <div class="ph-signin-filling">
      <form class="" action="verify.php" method="post">
        <div class="ph-signin-email">
        <input type="text" name="email" value="" class="ph-textbox" placeholder="Email" required="required">
        <div class="line"></div>
      </div>
      <div class="ph-signin-password">
        <input type="password" name="password" value="" class="ph-textbox" placeholder="Password" required="required">
        <div class="line"></div>
      </div>
      <button class="ph-signin-button" type="submit">SIGNIN</button>
      </form>
    </div>
  </div>
</div>
<div id="signup">

<div class="ph-signup-main">
  <div class="ph-signup-text">
    Signup
  </div>
  <div class="ph-signup-filling">
    <form class="createUser.php" action="createUser.php" method="post">
      <div class="ph-signup-fname">
      <input type="text" name="fname" value="" class="ph-textbox" placeholder="First Name" autocomplete="on" required="required">
      <div class="line"></div>
    </div>
    <div class="ph-signup-lname">
    <input type="text" name="lname" value="" class="ph-textbox" placeholder="Last Name" autocomplete="on" required="required">
    <div class="line"></div>
  </div>
  <div class="ph-signup-email">
  <input type="text" name="email" value="" class="ph-textbox" placeholder="Email" autocomplete="on" required="required">
  <div class="line"></div>
</div>
<?php // TODO: USERNAME  ?>
<div class="ph-signup-bdate">
<input type="date" name="bdate" value="" class="ph-textbox" placeholder="Birthdate" autocomplete="on" required="required">
<div class="line"></div>
</div>
<div class="ph-signup-pass">
<input type="password" name="pass" value="" class="ph-textbox" placeholder="Password" autocomplete="on" required="required">
<div class="line"></div>
</div>
<center><button class="ph-signup-button" type="submit">SIGNUP</button></center>
    </form>
  </div>
</div>
</div>
<div id="search">
  <div class="search-main">
    <div id="search-result">
      Hello.
    </div>
  </div>
</div>
      <div class="ph-feedback">
        <div class="ph-feedback-main">
          <div class="ph-feedback-header">
            <div class="ph-feedback-header-text">
              Feedback
            </div>
            <button type="button" name="button" class="ph-feedback-closebutton">
              <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill=""/>
                <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
            </button>
          </div>

          <div class="ph-feedback-data">
            <form action="feedback.php" method="post">
              <input type="text" name="title" value="" class="ph-feedback-data-headerbar" placeholder="Title" required>
              <textarea name="desc" class="ph-feedback-description" placeholder="Description" required></textarea>
              <button type="submit" name="button" class="ph-feedback-submit-button">SUBMIT</button>
            </form>
          </div>
          <div class="ph-feedback-TAC">
            <div class="ph-feedback-TAC-inner">
              <div class="ph-feedback-TAC-main">
                By sending sending you feedback, your persnol information we check and you are accept all <a href="#">terms and conditions.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <noscript>
           Please enable JavaScript to view this website.
         </noscript>
         <!-- toast -->
         <div id="snackbar">Invalid email and password.</div>
         <script>
          function showToast() {
              var x = document.getElementById("snackbar");
              x.className = "show";
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
          }
    </script>
    <?php
    if($_GET["ref"]=="e") {
        echo "<script>showToast();</script>";

    }
    ?>

<script type="text/javascript">
$(document).ready(function(){
    $(".ph-sidebar-searchbutton").click(function(){
        $(".ph-searchbar").css("visibility","visible");
        $(".ph-navbar").css("visibility","hidden");
        $("#home").hide();
        $("#signin").hide();
        $("#signup").hide();
        $("#search").show();
    });
});
$(document).ready(function(){
    $(".ph-close-button").click(function(){
        $(".ph-searchbar").css("visibility","hidden");
        $(".ph-navbar").css("visibility","visible");
        $("#home").show();
          $("#search").hide();
    });
});
$(document).ready(function(){
    $(".ph-sidebar-feedbackbutton").click(function(){
        $(".ph-feedback").css("visibility","visible");
            $("#search").hide();
    });
});
$(document).ready(function(){
    $(".ph-feedback-closebutton").click(function(){
        $(".ph-feedback").css("visibility","hidden");
            $("#search").hide();
    });
});
$(document).ready(function(){
    $(".ph-navbar-signin").click(function(){
        $(".ph-navbar-line").css({"transform":"translateX(100px)","transition-property":"all","transition-duration":"1s"});
        $("#signin").css("display","flex");
        $("#home").hide();
            $("#search").hide();
          $("#signup").hide();
    });
});
$(document).ready(function(){
    $(".ph-navbar-signup").click(function(){
        $(".ph-navbar-line").css("transform","translateX(210px)");
        $("#signup").css("display","flex");
        $("#home").hide();
            $("#search").hide();
          $("#signin").hide();
    });
});
$(document).ready(function(){
    $(".ph-navbar-home").click(function(){
        $(".ph-navbar-line").css("transform","translateX(0px)");
        $("#signin").hide();
            $("#search").hide();
        $("#signup").hide();
        $("#home").show();
    });
});
</script>
