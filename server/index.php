<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login - Projec.cc</title>
    <link rel="stylesheet" href="/css/master.min.css">
    <link rel="stylesheet" href="/resources/icons/fontawesome-all.min.css">
  </head>
  <body>
    <div id="mainpage">
      <div id="loginregpage" screen="login" <?php if(!empty($_SESSION['userid'])){echo "class='loggedin'";}?>>
        <div id="loginsection">
          <div class="loginlogo">
            <img src="/resources/img/loginlogo.png" alt="login logo">
          </div>
          <div class="loginform">
            <h2>Sign into Projec.cc</h2>
            <input type="text" id="userfield" placeholder="Username" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <input type="password" id="passfield" placeholder="Password" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <a id=loginbutton onclick="submitloginform()"><i class="fa fa-sign-in-alt"></i></a>
          </div>
          <div class="w300 footer">
            <h1 class="defidertext">Or</h1>
            <a class=inherit href="#register"><button id="createaccbutton" class=whitetransparent h>Create an account</button></a>
          </div>
        </div>
        <div id="regsection">
          <div class="w300 loginform">
            <h1 style="margin:25px 0;padding:0 15px;">Create an account</h1>
            <input type="text" id="reguserfield" placeholder="Username" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <input type="password" id="regpassfield" placeholder="Password" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <input type="password" id="validationregpassfield" placeholder="Validate password" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <div style="min-height:30px"></div>
            <a onclick="submitregform()" class="inherit"><button class="whitetransparent">Create</button></a>
          </div>
          <div class="w300 footer">
            <h1 class="defidertext">Or</h1>
            <a class=inherit href="#login"><button id="gotologinbut" class=whitetransparent h>Sign into Projec.cc</button></a>
          </div>
        </div>
      </div>
      <div id="header">

      </div>
      <div id="feed">
        <div class="postwrapper">
          <div class="post">
            <h3>Example Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="userwrapper">
              <img src="/resources/profilepicture/example.jpg" alt="">
              <span>NiggerNiggerNiggerNiggerNiggerNiggerNiggerNigger</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/master.min.js"></script>
  </body>
</html>
