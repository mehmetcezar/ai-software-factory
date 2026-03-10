<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satÄ±ÅŸ danÄ±ÅŸman emlak alÄ±m">
        <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
        <link rel="stylesheet" type="text/css" href="admin_new.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="logo/logo.jpeg" /> 
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    
    
</head>
    
<body class="loginmainpage">
    <?php
     include 'usersession.php';
            //echo "OKpre";
    //usersessiontimecheck();
    ?>
   
    <div class="mainconform">
        <div class="loginlogocon">
            <img src="logo/logo.jpeg" alt="Noveltech" class="logologin">
        </div>

        <form action="loginactionpage.php" method="post" class="loginform" id="loginform" onsubmit="return validateloginpage()">
          <div class="container">
            <label for="uname"><b>KullanÄ±cÄ± AdÄ±</b></label>
            <input type="text" placeholder="KullanÄ±cÄ± adÄ±nÄ±zÄ± girin" name="uname" id="uname" class="inputtextst">

            <label for="psw"><b>Åifre</b></label>
            <div class="password-wrapper">
                <input type="password" placeholder="Åifrenizi girin" name="psw" id="psw" class="inputtextst">
                <span id="togglePassword" class="eye-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>

            <div class="g-recaptcha" style="transform: scale(0.85); transform-origin: center center;" data-theme="dark" data-sitekey="6LemsP0pAAAAAHMT75XXrlw69_t_oRNWxlwURsNW"></div>
            <div id="g-recaptcha-error3" style="text-align: center; margin-top: 5px;"></div> 
            
            <button type="submit" class="buttonsubmitform">GiriÅŸ Yap</button>
          </div>
        </form>
    </div>

    <script>
    // Password visibility toggle (Hold to show)
    const pswInput = document.getElementById('psw');
    const toggleBtn = document.getElementById('togglePassword');

    const showPassword = () => { pswInput.type = 'text'; };
    const hidePassword = () => { pswInput.type = 'password'; };

    toggleBtn.addEventListener('mousedown', showPassword);
    toggleBtn.addEventListener('mouseup', hidePassword);
    toggleBtn.addEventListener('mouseleave', hidePassword);

    // Support for touch devices
    toggleBtn.addEventListener('touchstart', (e) => {
        e.preventDefault();
        showPassword();
    });
    toggleBtn.addEventListener('touchend', (e) => {
        e.preventDefault();
        hidePassword();
    });
    </script>
    
 
 <script>
 window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
     
function validateloginpage(){
    
    let x = document.forms["loginform"]["uname"].value;
    let y = document.forms["loginform"]["psw"].value;
    x=x.trim(x);
    y=y.trim(y);

  if (x == "") {
    alert("KullanÄ±cÄ± adÄ± doldurulmalÄ±dÄ±r.");
      document.getElementById("uname").value = '';
      document.getElementById("uname").focus();
    return false;
  }
    
     var count=0;
    for(i=0;i<x.length;i++){
        var ASCIICode=x.charCodeAt(i);
//alert(ASCIICode);
        if (!((ASCIICode >= 65 && ASCIICode <= 90) || (ASCIICode >= 97 && ASCIICode <= 122) || (ASCIICode >= 48 && ASCIICode <= 57) || ASCIICode ==32 || ASCIICode ==287 || ASCIICode ==286 || ASCIICode ==350 || ASCIICode ==351 || ASCIICode ==252 || ASCIICode ==220 || ASCIICode ==231 || ASCIICode ==199 || ASCIICode ==246 || ASCIICode ==214 || ASCIICode ==305 || ASCIICode ==46 )){
            count++;}  
    }
    
    if (count){alert("KullanÄ±cÄ± adÄ± dÃ¼zgÃ¼n doldurulmadÄ±.")
               document.getElementById("uname").value = '';
               document.getElementById("uname").focus();
            return false;
    }
    
    
    if (y == "") {
    alert("Åifre doldurulmalÄ±dÄ±r.");
    document.getElementById("psw").value = '';
    document.getElementById("psw").focus();
    return false;
  }
    
        /*if (!ValidatePass(y)){
                     alert("Wrong Password!");
                     document.getElementById("psw").value = '';
                     document.getElementById("psw").focus();
            return false;
    }*/
    //alert(y);alert(y.length);
 
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error3').innerHTML = '<span style="color:red;font-weight:bold;">Bu alan doldurulmalÄ±dÄ±r.</span>';
        return false;
    }else
    {return true;}
    
  
document.getElementById("loginform").addEventListener("submit", function(evt)
  {
  
  var response2 = grecaptcha.getResponse();
    alert(response2);
  if(response2.length == 0) 
  { 
    //reCaptcha not verified
    document.getElementById('g-recaptcha-error3').innerHTML = '<span style="color:red;">Bu alan doldurulmalÄ±dÄ±r.</span>';
        return false;
    evt.preventDefault();
    return false;
  }else{
  return true;}
  
});
    
} 
        

        
        
        
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error3').innerHTML = '';
}

/*function ValidatePass(pass) 
{
    //7 to 15 characters which contain only characters, numeric digits, underscore and first character must be a letter
var re = /^[A-Za-z]\w{7,14}$/;
return (re.test(String(pass).toLowerCase()));
}*/
</script>    
   
<footer class="footer">  
<div class="b-footer">

<p>
TÃ¼m HaklarÄ± SaklÄ±dÄ±r Â© NOVELTECH <script>document.write(new Date().getFullYear())</script> </p>
<p>Designed by Noveltech Solutions Ltd.</p><p><img style="max-height:auto;max-width:80px;" src="image/logo/noveltechlogo.jpeg"></p>
    </div>
    </footer> 
    
    <div class="container">
    <div class="middleboxpdf">
    
    <br><br>
            
        </div>
    
    </div>
    
</body>
</html>
