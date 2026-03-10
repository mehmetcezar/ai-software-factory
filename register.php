<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noveltech - Kurumsal Kayıt</title>
    <link rel="stylesheet" href="register.css?rnd=<?php echo rand()?>">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo/noveltechlogo.jpeg" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filters = {
                'username': /[^a-zA-Z0-9._]/g,
                'first_name': /[^a-zA-ZğüşıöçĞÜŞİÖÇ .]/g,
                'last_name': /[^a-zA-ZğüşıöçĞÜŞİÖÇ .]/g,
                'company_name': /[^a-zA-ZğüşıöçĞÜŞİÖÇ0-9 &.\-\/,]/g,
                'phone': /[^0-9]/g
            };

            Object.keys(filters).forEach(fieldName => {
                const input = document.querySelector(`input[name="${fieldName}"]`);
                if (input) {
                    input.addEventListener('input', function(e) {
                        const start = this.selectionStart;
                        const end = this.selectionEnd;
                        const oldValue = this.value;
                        const newValue = oldValue.replace(filters[fieldName], '');
                        
                        if (oldValue !== newValue) {
                            this.value = newValue;
                            // Restore cursor position
                            this.setSelectionRange(start - (oldValue.length - newValue.length), end - (oldValue.length - newValue.length));
                        }
                    });
                }
            });
        });
    </script>
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
                <input type="text" name="company_name" class="input-field" placeholder="Örn: Noveltech Emlak" maxlength="100" required>
            </div>

            <div class="form-group">
                <label>Adınız</label>
                <input type="text" name="first_name" class="input-field" placeholder="Ad" maxlength="30" required>
            </div>

            <div class="form-group">
                <label>Soyadınız</label>
                <input type="text" name="last_name" class="input-field" placeholder="Soyad" maxlength="30" required>
            </div>

            <div class="form-group">
                <label>Telefon Numarası</label>
                <input type="tel" name="phone" class="input-field" placeholder="5XXXXXXXXX" pattern="5[0-9]{9}" title="Format: 5XXXXXXXXX (10 hane)" maxlength="15" required>
            </div>

            <div class="form-group">
                <label>Kullanıcı Adı</label>
                <input type="text" name="username" class="input-field" placeholder="Giriş için kullanıcı adınız" maxlength="20" required>
            </div>

            <div class="form-group">
                <label>E-posta Adresi</label>
                <input type="email" name="email" class="input-field" placeholder="iletisim@sirketiniz.com" maxlength="30" required>
            </div>

            <div class="form-group">
                <label>Şifre</label>
                <input type="password" name="password" class="input-field" placeholder="••••••••" maxlength="32" required>
            </div>

            <div class="form-group">
                <label>Şifre Tekrar</label>
                <input type="password" name="password_confirm" class="input-field" placeholder="••••••••" maxlength="32" required>
            </div>

            <button type="submit" class="reg-button">Hesabı Oluştur</button>
        </form>

        <div class="login-link">
            Zaten hesabınız var mı? <a href="admin.php">Giriş Yap</a>
        </div>
    </div>
</body>
</html>
