<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Noveltech - Giriş</title>
    <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
    <link rel="stylesheet" type="text/css" href="admin_new.css?rnd=<?php echo rand()?>">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo/noveltechlogo.jpeg" /> 
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body class="loginmainpage">
    <?php include_once 'usersession.php'; ?>
   
    <div class="mainconform">
        <div class="loginlogocon">
            <img src="image/logo/noveltechlogo.jpeg" alt="Noveltech" class="logologin">
        </div>

        <form action="loginactionpage.php" method="post" class="loginform" id="loginform" onsubmit="return validateloginpage()">
          <div class="container">
            <label for="uname"><b>Kullanıcı Adı</b></label>
            <input type="text" placeholder="Kullanıcı adınızı girin" name="uname" id="uname" class="inputtextst" required>

            <label for="psw"><b>Şifre</b></label>
            <div class="password-wrapper">
                <input type="password" placeholder="Şifrenizi girin" name="psw" id="psw" class="inputtextst" required>
                <span id="togglePassword" class="eye-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>

            <div class="g-recaptcha" style="transform: scale(0.85); transform-origin: center center;" data-theme="dark" data-sitekey="6LemsP0pAAAAAHMT75XXrlw69_t_oRNWxlwURsNW"></div>
            <div id="g-recaptcha-error3" style="text-align: center; margin-top: 5px;"></div> 
            
            <button type="submit" class="buttonsubmitform">Giriş Yap</button>
          </div>
        </form>
    </div>

    <script>
    // Password visibility toggle
    const pswInput = document.getElementById('psw');
    const toggleBtn = document.getElementById('togglePassword');
    const showPassword = () => { pswInput.type = 'text'; };
    const hidePassword = () => { pswInput.type = 'password'; };
    toggleBtn.addEventListener('mousedown', showPassword);
    toggleBtn.addEventListener('mouseup', hidePassword);
    toggleBtn.addEventListener('mouseleave', hidePassword);
    toggleBtn.addEventListener('touchstart', (e) => { e.preventDefault(); showPassword(); });
    toggleBtn.addEventListener('touchend', (e) => { e.preventDefault(); hidePassword(); });

    function validateloginpage(){
        let x = document.forms["loginform"]["uname"].value.trim();
        let y = document.forms["loginform"]["psw"].value.trim();
        if (x == "") { alert("Kullanıcı adı doldurulmalıdır."); return false; }
        if (y == "") { alert("Şifre doldurulmalıdır."); return false; }
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            document.getElementById('g-recaptcha-error3').innerHTML = '<span style="color:red;font-weight:bold;">Lütfen reCAPTCHA doğrulamasını yapın.</span>';
            return false;
        }
        return true;
    }
    </script>
    
    <footer class="footer">  
        <div class="b-footer">
            <p>Tüm Hakları Saklıdır © NOVELTECH <script>document.write(new Date().getFullYear())</script> </p>
            <p>Designed by Noveltech Solutions Ltd.</p>
            <p><img style="max-height:auto;max-width:80px;" src="image/logo/noveltechlogo.jpeg"></p>
        </div>
    </footer> 
</body>
</html>
