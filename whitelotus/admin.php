<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
        <title>https://whitelotustest.online/</title>
        <meta name="ktmmo" content="kira satış danışman emlak alım">
        <link rel="stylesheet" type="text/css" href="main.css?rnd=<?php echo rand()?>">
        <link rel="shortcut icon" type="image/x-icon" href="logo/logo.jpeg" /> 
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    
    <style>

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
    
    
</head>
    
<body class="loginmainpage">
  <!--
    <div id="myNav" class="overlay" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content" style="font-size:14px;">
    <a href="./files/LAB.pdf">LAB Bilgi Formu</a>
    <a href="./files/LABSSS.pdf">SSS</a>
      <a href="./files/LABS.pdf">LAB</a>
      <a href="./files/LABS.pdf">LAB</a>
  </div>
</div> -->

<!--<span style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776; Genel Bilgi İçin Tıkla</span>-->
   <!--
    <script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
    <br><br>
     <div id="myNav2" class="overlay" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <div class="overlay-content" style="font-size:14px;">
    <a href="./files/KAROT%20NUMUNES%C4%B0%20ALIM%20TALEP%20FORMU-Okul%20Binalar%C4%B1%20i%C3%A7in.docx">Karot Numunesi</a>
    <a href="./files/MEB%20G%C3%BC%C3%A7lendirme%20Projeleri%20Prosed%C3%BCr%C3%BC.docx">Güçlendirme Prosedürü</a>
      <a href="./files/Teklif%20formu.doc">Teklif Formu</a>
      <a href="./files/MEB%20OKUL%20BI%CC%87NALARI%20DEG%CC%86ERLENDI%CC%87RME%20LI%CC%87STESI%CC%87%20son.pdf">Değerlendirme Listesi</a>
      <a href="https://drive.google.com/drive/folders/1UItpLusL-PGzoFHdAGKxqPkwbw_d6t64?usp=sharing">Görsel Planlar</a>
      <a href="./files/MEB-%C3%87al%C4%B1%C5%9Fma.pdf">Labaratuar ve Analiz Bilgileri</a>
  </div>
</div> 
<span style="font-size:15px;cursor:pointer" onclick="openNav2()">&#9776; Okullar Projelendirme Bilgileri İçin Tıkla</span>
    <script>
function openNav2() {
  document.getElementById("myNav2").style.height = "100%";
}

function closeNav2() {
  document.getElementById("myNav2").style.height = "0%";
}
</script> 
    
    -->
    
   <!-- <div class="topnav" id="myTopnav">
<a href="./files/IMO_RVS-4AE.pdf" download>BBF</a>
<a href="./files/SSS.pdf" download>SSS</a>

</div>-->
    
<!--<a href="./files/IMO_RVS-4AE.pdf" download><img src="image/menu/pdfpic.jpg" alt="" style="width:40px; height:auto; padding:0px 0px 0px 10px;"></a><p style="font-size:12px;font-weight:bolder;">Bina Bilgi Formunu İndir</p>
        <a href="./files/SSS.pdf" download><img src="image/menu/pdfpic.jpg" alt="" style="width:40px; height:auto; padding:0px 0px 0px 10px;"></a><p style="font-size:12px;font-weight:bolder;">SSS İndir</p>-->
    <!--
    <div class="container">
    <label><b>Sitenin Bakımı Yapılmaktadır. Daha sonra tekrar deneyiniz..</b></label>
    </div>
    
    -->
    <?php
     include 'usersession.php';
            //echo "OKpre";
    //usersessiontimecheck();
    ?>
   
    <div class="mainconform">
<div class="loginlogocon">
    <img src="logo/logo.jpeg" alt="Login Page" class="logologin">
    
</div>
<form action="loginactionpage.php" method="post" class="loginform" id="loginform" onsubmit="return validateloginpage()">
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="uname"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" class="inputtextst">

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" class="inputtextst">
       <div class="g-recaptcha" style="transform: scale(0.77);-webkit-transform: scale(0.77); transform-origin: 0 0;
-webkit-transform-origin: 0 0;" data-theme="light" data-sitekey="6LemsP0pAAAAAHMT75XXrlw69_t_oRNWxlwURsNW"></div>
          <div id="g-recaptcha-error3"></div> 
    <button type="submit" class="buttonsubmitform">Giriş</button>
  </div>
</form>
</div>
    
 
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
    alert("Kullanıcı adı doldurulmalıdır.");
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
    
    if (count){alert("Kullanıcı adı düzgün doldurulmadı.")
               document.getElementById("uname").value = '';
               document.getElementById("uname").focus();
            return false;
    }
    
    
    if (y == "") {
    alert("Şifre doldurulmalıdır.");
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
        document.getElementById('g-recaptcha-error3').innerHTML = '<span style="color:red;font-weight:bold;">Bu alan doldurulmalıdır.</span>';
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
    document.getElementById('g-recaptcha-error3').innerHTML = '<span style="color:red;">Bu alan doldurulmalıdır.</span>';
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
Tüm Hakları Saklıdır © WHITELOTUS <script>document.write(new Date().getFullYear())</script> </p>
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