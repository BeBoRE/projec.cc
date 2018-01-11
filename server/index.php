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
        <div class="headerwrapper">
          <div class="pagenamecontainer">
            <h2 id=pagename>Community Feed</h2>
          </div>
          <a onclick='httplogout()'>
            <div class="Logoutbuttoncontainer">
              <div>
                <span class=middle>Log-Out</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div id="feed">
        <div class="postwrapper">
          <div class="post">
            <h3>I am a stable genius</h3>
            <p>To be fair, you have to have a very high IQ to understand Rick and Morty. The humour is extremely subtle, and without a solid grasp of theoretical physics most of the jokes will go over a typical viewer’s head. There’s also Rick’s nihilistic outlook, which is deftly woven into his characterisation- his personal philosophy draws heavily from Narodnaya Volya literature, for instance. The fans understand this stuff; they have the intellectual capacity to truly appreciate the depths of these jokes, to realise that they’re not just funny- they say something deep about LIFE. As a consequence people who dislike Rick & Morty truly ARE idiots- of course they wouldn’t appreciate, for instance, the humour in Rick’s existential catchphrase “Wubba Lubba Dub Dub,” which itself is a cryptic reference to Turgenev’s Russian epic Fathers and Sons. I’m smirking right now just imagining one of those addlepated simpletons scratching their heads in confusion as Dan Harmon’s genius wit unfolds itself on their television screens. What fools.. how I pity them. 😂<br> <br>

And yes, by the way, i DO have a Rick & Morty tattoo. And no, you cannot see it. It’s for the ladies’ eyes only- and even then they have to demonstrate that they’re within 5 IQ points of my own (preferably lower) beforehand. Nothin personnel kid 😎
</p>
            <div class="userwrapper">
              <img src="/resources/profilepicture/example.jpg" alt="">
              <span>Reign-G</span>
            </div>
          </div>
        </div>
        <div class="postwrapper">
          <div class="post">
            <h3>I took some notes</h3>
            <p>the world we live in. it's so... wonderous. mysterious. even magical. no... no no no.. not that world. i meant this one. the smartphone. each system and program app is it's own little planet of perfect. technology. all providing services so necessary, so crucial, so unbelievably profound. look who just sent me a text! addie mccallister? it must be a mistake. or a joke. or a scam! don't send her your social security number. she's right there! that's our user, alex. and, like every freshman in high school, his whole life, everything, revolves around his phone. and, because the pace of life gets, faster and faster... phones down in five. and attention spans get shorter and shorter... and... you're probably not even listening to me right now. who has the time to type out actual words? and that's where we come in. the most important invention in the history of communication! emo gees. that's my home! textopolis. here, each of us does one thing, and we have to nail it every time. christmas tree just has to stand there, all festive. merry christmas! it's still september, tim! and princesses... i am so pretty. they just gotta wear their crowns and keep their hair comb. we are so pretty. devil, poop, thumbs up, they just show up and they're good to go. but for the faces, the pressure is on. cryer always has to cry, even if he just won the lottery. hurray, i'm a millionaire! laugher's always laughing, even if he's just broken his arm. ahh!! ah! i can see the bone!! ah ah ah ah ah... and me, i'm a meh. so i gotta totally be over it all the time, you know? like meh, who cares. which is not as easy as it sounds. i gotta be mehhhhhhhhh i GOTTA! be! mehhhhhhhhh morning misses D, i see you have the little minis with ya! oh, they're so... cute! NYAH, SO ADORABLE, I CAN'T TAKE IT! I WILL NEVER GET THEM TO SLEEP! STICK TO YOUR ONE FACE, WEIRDO. OLE! OLE! OH NO! OH NO! it's hard to only act blasé. when, living in textopolis is.... just so exciting! hah low good simeans! those ah some shalp attach shays! yes, well we have business to attend to. whot kind off business? monkey business. ha ha ha ha, i sounded british. meh... Oh, that was really good.. meh ? meh ... meh ha ha... what the freak ya doing there,
</p>
            <div class="userwrapper">
              <img src="/resources/profilepicture/example.jpg" alt="">
              <span>Ugandan Warrior</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/master.min.js"></script>
  </body>
</html>
