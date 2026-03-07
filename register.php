<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noveltech - Kurumsal Kayıt</title>
    <link rel="stylesheet" href="register.css?rnd=<?php echo rand()?>">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo/noveltechlogo.jpeg" />
</head>
<body>
    <div class="reg-container">
        <div class="reg-header">
            <h2>Hemen Başlayın</h2>
            <p>Şirketinizi kaydedin ve mülklerinizi profesyonelce yönetin.</p>
        </div>

        <form action="registeraction.php" method="POST">
            <div class="form-group">
                <label>Şirket Adı</label>
                <input type="text" name="company_name" class="input-field" placeholder="Örn: Noveltech Emlak" required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label>Adınız</label>
                    <input type="text" name="first_name" class="input-field" placeholder="Ad" required>
                </div>
                <div class="form-group">
                    <label>Soyadınız</label>
                    <input type="text" name="last_name" class="input-field" placeholder="Soyad" required>
                </div>
            </div>

            <div class="form-group">
                <label>Kullanıcı Adı</label>
                <input type="text" name="username" class="input-field" placeholder="Giriş için kullanıcı adınız" required>
            </div>

            <div class="form-group">
                <label>E-posta Adresi</label>
                <input type="email" name="email" class="input-field" placeholder="iletisim@sirketiniz.com" required>
            </div>

            <div class="form-group">
                <label>Şifre</label>
                <input type="password" name="password" class="input-field" placeholder="••••••••" required>
            </div>

            <button type="submit" class="reg-button">Hesabı Oluştur</button>
        </form>

        <div class="login-link">
            Zaten hesabınız var mı? <a href="admin.php">Giriş Yap</a>
        </div>
    </div>
</body>
</html>
