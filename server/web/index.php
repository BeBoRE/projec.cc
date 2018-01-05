<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login - Projec.cc</title>
    <link rel="stylesheet" href="/css/master.css">
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
            <h1 style="margin:50px 0;">Create an account</h1>
            <input type="text" id="reguserfield" placeholder="Username" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <input type="password" id="regpassfield" placeholder="Password" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <input type="password" id="validationregpassfield" placeholder="Validate password" spellcheck="false" autocapitalize="none" autocorrect="off" autocomplete="off">
            <div style="min-height:30px"></div>
            <a href="" class="inherit"><button class="whitetransparent">Create</button></a>
          </div>
          <div class="w300 footer">
            <h1 class="defidertext">Or</h1>
            <a class=inherit href="#login"><button id="gotologinbut" class=whitetransparent h>Sign into Projec.cc</button></a>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/master.js"></script>
  </body>
</html>
