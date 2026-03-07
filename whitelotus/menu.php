<?php

 if($kultipi=="admin"){
                          $linkref="adminpage.php";
                      }
                      if($kultipi=="yetkili"){
                          $linkref="yetkilipage.php";
                      }
                      if($kultipi=="muhasebe"){
                          $linkref="muhasebepage.php";
                      }
                      if($kultipi=="musteri"){
                          $linkref="musteripage.php";
                      }
                      if($kultipi=="kiralamasorumlusu"){
                          $linkref="kiralamasorumlusupage.php";
                      }

/*
                      if($kultipi=="sekreter"){
                          $linkref="sekreterpage.php";
                      }
                      if($kultipi=="vizeci"){
                          $linkref="vizecipage.php";
                      }*/


/*if($kultipi=="admin"){
echo '<div class="topnav" id="myTopnav">
  <a href="'.$linkref.'" class="active">Ana Sayfa</a>
   <div class="dropdownx">
    <button class="dropbtn">Kullanıcılar 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownx-content">
       <a href="userscreate.php">Kullanıcı Oluştur</a>
      <a href="adminusermanage.php">Kullanıcı Yönet</a>
    </div>
  </div> 
  <a href="logout.php">Oturumu Kapat</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>';
}*/

if($kultipi=="admin"){
echo '<nav class="navbar navbar-expand-xl bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/adminpage.php">
      <img src="/logo/logo2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="'.$linkref.'">Ana Sayfa</a>
        </li>
       <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kullanıcılar</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="userscreate.php">Kullanıcı Oluştur</a></li>
    <li><a class="dropdown-item" href="adminusermanage.php">Kullanıcı Yönet</a></li>
  </ul>
</li>
</ul>
 <ul class="navbar-nav ms-auto">
			 
                    <li class="nav-item dropdown">
                         <div class="avatar dropdown-toggle" id="avatarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/avatar.jpg" alt="Avatar">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                            /*<li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Ayarlar</a></li>*/
                            echo '<li><hr class="dropdown-divider">
                             <li><a class="dropdown-item" href="2wauth.php">Çift Doğrulama</a></li>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
                        </ul>
                    </li>
                	
		  </ul>	

    </div>
    
   
    
    
    
  </div>
</nav>';
}


if($kultipi=="yetkili"){
echo '<nav class="navbar navbar-expand-xl bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/yetkilipage.php">
      <img src="/logo/logo2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="'.$linkref.'">Ana Sayfa</a>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Yapı Kayıt</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="yapikayit.php">Yapı Oluştur</a></li>
    <li><a class="dropdown-item" href="yapikayityonet.php">Yapı Yönet</a></li>
  </ul>
</li>


             <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Mülk Menü</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="mulkkayit.php">Mülk Kayıt</a></li>
    <li><a class="dropdown-item" href="kirakapalimulkyonet.php">Kiraya Kapalı Mülk Yönet</a></li>
  </ul>
</li>




     
     
     
             <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kiralama Menü</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="kiralama.php">Kiralama</a></li>
    <li><a class="dropdown-item" href="kiralamaonay.php">Kiralama Onayla</a></li>
    <li><a class="dropdown-item" href="noticeonay.php">Notice Onayla</a></li>
    <li><a class="dropdown-item" href="zararziyanonay.php">Zarar-Ziyan Onayla</a>
    <li><a class="dropdown-item" href="tahsilatonay.php">Tahsilat Onayla</a></li>
  </ul>
</li>
     

             <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kapora Menü</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="kaporaonay.php">Kapora Onayla</a></li>
    <li><a class="dropdown-item" href="kaporasureonay.php">Kapora Süre Onayla</a></li>
    <li><a class="dropdown-item" href="kaporaiptalsureuzat.php"> Kiralanmayıp, Süresi Dolan Kaporalar</a></li>
  </ul>
</li>


             <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Acente Menü</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="acenteolustur.php">Acente Oluştur</a></li>
    <li><a class="dropdown-item" href="acenteyonet.php">Acente Yönet</a></li>
  </ul>
</li>


<a class="nav-link" href="malsahibiaidattahsil.php">Mal Sahibi Aidat</a>
<a class="nav-link" href="yetdosyapaylasimmusteri.php">Dosya Paylaşım</a>      
      
</ul>
 <ul class="navbar-nav ms-auto">
			 
                    <li class="nav-item dropdown">
                         <div class="avatar dropdown-toggle" id="avatarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/avatar.jpg" alt="Avatar">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                            /*<li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Ayarlar</a></li>*/
                            echo '<li><hr class="dropdown-divider">
                             <li><a class="dropdown-item" href="2wauth.php">Çift Doğrulama</a></li>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
                        </ul>
                    </li>
                	
		  </ul>	

    </div>
    
   
    
    
    
  </div>
</nav>';
    
    
    
    
}

if($kultipi=="muhasebe"){
echo '<nav class="navbar navbar-expand-xl bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/muhasebepage.php">
      <img src="/logo/logo2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="'.$linkref.'">Ana Sayfa</a>
                <li class="nav-item dropdown">
  
</li>  
 



             <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Muhasebe</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="muhasebeproje.php">Proje ve Daireler</a></li>
    
  </ul>
</li>





</ul>

 <ul class="navbar-nav ms-auto">
			 
                    <li class="nav-item dropdown">
                         <div class="avatar dropdown-toggle" id="avatarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/avatar.jpg" alt="Avatar">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                            /*<li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Ayarlar</a></li>*/
                            echo '<li><hr class="dropdown-divider">
                             <li><a class="dropdown-item" href="2wauth.php">Çift Doğrulama</a></li>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
                        </ul>
                    </li>
                	
		  </ul>	

    </div>
    
   
    
    
    
  </div>
</nav>';
    
    
    
    
}


if($kultipi=="kiralamasorumlusu"){
echo '<nav class="navbar navbar-expand-xl bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/kiralamasorumlusupage.php">
      <img src="/logo/logo2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="'.$linkref.'">Ana Sayfa</a>
        <li class="nav-item dropdown">

</li>
<a class="nav-link" href="malsahibiaidattahsil.php">Mal Sahibi Aidat Tahsil Et</a>  
 </ul>     
     
      <a class="nav-link" href="kiralama.php">Kiralama</a> 

 <ul class="navbar-nav ms-auto">
			 
                    <li class="nav-item dropdown">
                         <div class="avatar dropdown-toggle" id="avatarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/avatar.jpg" alt="Avatar">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                            /*<li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Ayarlar</a></li>*/
                            echo '<li><hr class="dropdown-divider">
                             <li><a class="dropdown-item" href="2wauth.php">Çift Doğrulama</a></li>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
                        </ul>
                    </li>
                	
		  </ul>	

        
       
        
    </div>
    
   
    
    
    
  </div>
</nav>';
    
    
    
    
}


if($kultipi=="musteri"){
echo '<nav class="navbar navbar-expand-xl bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/musteripage.php">
      <img src="/logo/logo2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="'.$linkref.'">Ana Sayfa</a>
                <li class="nav-item dropdown">
  
</li>
       
<a class="nav-link" href="musteridosyapaylasim.php">Dosya Paylaşım</a>  
</ul>
 <ul class="navbar-nav ms-auto">
			 
                    <li class="nav-item dropdown">
                         <div class="avatar dropdown-toggle" id="avatarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/avatar.jpg" alt="Avatar">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
                            /*<li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Ayarlar</a></li>*/
                            echo '<li><hr class="dropdown-divider">
                             <li><a class="dropdown-item" href="2wauth.php">Çift Doğrulama</a></li>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
                        </ul>
                    </li>
                	
		  </ul>	

    </div>
    
   
    
    
    
  </div>
</nav>';
    
    
    
    
}


/* <a href="numunekayitpage.php">Numune Kayıt</a>
  <a href="deneytakip.php">Deney Takip</a>
  <a href="adminpagedeneygirisrapor.php">Deney Veri Giriş</a>*/
    

/*<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>*/

?>






