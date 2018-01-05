function geti(el) {
  if(document.getElementById(el)){
    return document.getElementById(el)
  }
  else{
    console.warn(el , "not found")
    return undefined
  }
}

userfield = geti('userfield')
passfield = geti('passfield')
loginbutton = geti('loginbutton')
loginregscreen = geti('loginregpage')
createaccbutton = geti('createaccbutton')
gotologinbut = geti('gotologinbut')
reguserfield = geti('reguserfield')
regpassfield = geti('regpassfield')
valregpassfield = geti('validationregpassfield')

function httplogin(user,pass){
  xhttp = new XMLHttpRequest()
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      response = this.responseText
      switch(response){
        case "loginsuccesful":
        case "alreadyloggedon":
          loginregscreen.classList.add('loggedin')
          break
        case "incorrectcredentials":
          passfield.classList.add("error")
          break
        case "nopassuserset":
          userfield.classList.add("error")
          passfield.classList.add("error")
          break
        case "usernamenotexist":
          createaccbutton.classList.add('warn')
          userfield.classList.add("warn")
          break
        default:
          console.warn('unknown error occured',response)
      }
    }
  }
  xhttp.open("POST", "/login/", true)
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  xhttp.send("username=" + user + "&password=" + pass)
}

function httpreg(user,pass){
  xhttp = new XMLHttpRequest()
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      response = this.responseText
      switch(response){

        //alreadyloggedon <- If user is already logged on
        //nopassuserset   <- No password or username given
        //unsafechar      <- Character given not between 33 and 126 (All printable characters except space and DEL)
        //accalreadyexist <- If username already exists in database
        //accregsuccesful <- Account inserted into database

        case "nopassuserset":
        case "unsafechar":
        reguserfield.classList.add('error')
        valregpassfield.classList.add('error')
        regpassfield.classList.add('error')
        break
        case "accalreadyexist":
        reguserfield.classList.add('warn')
        gotologinbut.classList.add('warn')
        break
        case "accregsuccesful":
        case "alreadyloggedon":
        loginregscreen.classList.add('loggedin')
        break
        default:
        console.warn('unknown error occured',response)
      }
    }
  }
  xhttp.open("POST", "/register/", true)
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  xhttp.send("username=" + user + "&password=" + pass)
}

userfield.onkeypress = function(event) {
  if(event.target.value.match(/[^\x21-\x7E]/) || event.key.match(/[^\x21-\x7E]/)){
    event.target.classList.add('error')
  }
  else{
    event.target.classList.remove('error')
  }
  if (event.key == "Enter"){
    if(event.target.value.match(/[^\x21-\x7E]/)){
      event.target.classList.add('error')
    }
    else{
      passfield.focus()
    }
  }
}

reguserfield.onkeypress = function(event) {
  if(event.target.value.match(/[^\x21-\x7E]/) || event.key.match(/[^\x21-\x7E]/)){
    event.target.classList.add('error')
  }
  else{
    event.target.classList.remove('error')
  }
  if (event.key == "Enter"){
    if(event.target.value.match(/[^\x21-\x7E]/)){
      event.target.classList.add('error')
    }
    else{
      regpassfield.focus()
    }
  }
}

passfield.onkeypress = function(event) {

  if(event.target.value.match(/[^\x21-\x7E]/) || event.key.match(/[^\x21-\x7E]/)){
    event.target.classList.add('error')
  }
  else{
    event.target.classList.remove('error')
  }
  if (event.key == "Enter"){
    if(userfield.value){
      if((event.target.value + userfield.value).match(/[^\x21-\x7E]/)){
        event.target.classList.add('error')
      }
      else{
        httplogin(userfield.value,passfield.value)
      }
    }
    else{
      userfield.classList.add('error')
      userfield.focus()
    }
  }
}

regpassfield.onkeypress = function(event) {
  if(event.target.value.match(/[^\x21-\x7E]/) || event.key.match(/[^\x21-\x7E]/)){
    event.target.classList.add('error')
  }
  else{
    event.target.classList.remove('error')
  }
  if (event.key == "Enter"){
    if(!userfield.value){
      if((event.target.value + reguserfield.value).match(/[^\x21-\x7E]/)){
        event.target.classList.add('error')
      }
      else{
        valregpassfield.focus()
      }
    }
    else{
      reguserfield.classList.add('error')
      reguserfield.focus()
    }
  }
}

valregpassfield.onkeyup = function(event) {
  if(valregpassfield.value == regpassfield.value && valregpassfield.value && regpassfield.value){
    valregpassfield.classList.add('correct')
    regpassfield.classList.add('correct')
  }
  else{
    valregpassfield.classList.remove('correct')
    regpassfield.classList.remove('correct')
  }
  if(event.key == "Enter"){
    if(!reguserfield.value){
      reguserfield.classList.add('error')
      reguserfield.focus()
    }
    else{
      if(valregpassfield.value == regpassfield.value){
        console.log("initiate httpsignup")
        httpreg(reguserfield.value,regpassfield.value)
        valregpassfield.classList.add('correct')
        regpassfield.classList.add('correct')
      }
      else{
        valregpassfield.classList.add('error')
        regpassfield.classList.add('error')
      }
    }
  }
}

passfield.onclick = function(event){
  if(!userfield.value){
    userfield.focus()
    userfield.classList.add('error')
  }
}

function submitloginform(){
  httplogin(userfield.value,passfield.value)
}

function checkHash(){
  if (window.location.hash == "#register"){
    loginregscreen.setAttribute("screen","register")
  }
  if (window.location.hash == "#login"){
    loginregscreen.setAttribute("screen","login")
  }
}

checkHash()

window.onhashchange = function(){
  checkHash()
}
