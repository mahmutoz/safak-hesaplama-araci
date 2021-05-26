<?php require_once "options.php"?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Şafak Hesaplama</title>
</head>
<body>

    <div class="safak-container">
        <form action="" method="get" class="safak-form">
            <div class="safak-wrapper">
                <label>
                    <p>Askerlik Süresi*</p>
                    <select name="military-service-time" required>
                        <option value="0">Seçiniz</option>
                        <option value="30">1 Ay (Bedelli)</option>
                        <option value="180">6 Ay (Er/Erbaş)</option>
                        <option value="360">12 Ay (Yedek Subay/ Astsubay)</option>
                    </select>
                </label>
                <label>
                    <p>Sevk Tarihi*</p>
                    <input type="date" name="ship-date" min="<?php echo date('Y-m-d', strtotime('-365 day')) ?>" required>
                </label>
                <label>
                    <p>Kullanılan İzin</p>
                    <select name="permission-used">
                        <option value="0">0 Gün (İzin kullanmadım)</option>
                        <option value="1">1 Gün</option>
                        <option value="2">2 Gün</option>
                        <option value="3">3 Gün</option>
                        <option value="4">4 Gün</option>
                        <option value="5">5 Gün</option>
                        <option value="6">6 Gün</option>
                        <option value="7">7 Gün</option>
                        <option value="8">8 Gün</option>
                        <option value="9">9 Gün</option>
                        <option value="10">10 Gün</option>
                        <option value="11">11 Gün</option>
                        <option value="12">12 Gün</option>
                        <option value="13">13 Gün</option>
                        <option value="14">14 Gün</option>
                        <option value="15">15 Gün</option>
                        <option value="16">16 Gün</option>
                        <option value="17">17 Gün</option>
                        <option value="18">18 Gün</option>
                        <option value="19">19 Gün</option>
                        <option value="20">20 Gün</option>
                        <option value="21">21 Gün</option>
                        <option value="22">22 Gün</option>
                        <option value="23">23 Gün</option>
                        <option value="24">24 Gün</option>
                    </select>
                </label>
            </div>
            <div class="safak-wrapper">
                <label>
                    <p>Yol İzin Hakkı</p>
                    <select name="road-permission">
                        <option value="0">0 Gün</option>
                        <option value="1">1 Gün</option>
                        <option value="2">2 Gün</option>
                        <option value="3">3 Gün</option>
                        <option value="4">4 Gün</option>
                    </select>
                </label>
                <label>
                    <p>TMİ Yol İzni</p>
                    <select name="tmi-road-permission">
                        <option value="0">0 Gün</option>
                        <option value="1">1 Gün</option>
                        <option value="2">2 Gün</option>
                    </select>
                </label>
                <label>
                    <p>Hava Değişimi/İstirahat Süresi</p>
                    <input type="number" min="0" max="100" name="sick-leave">
                </label>
            </div>
            <div class="safak-wrapper">
                <label>
                    <p>Firar/İzin Tecavüzü/Geç Katılış</p>
                    <input type="number" min="0" max="100" name="escape">
                </label>
                <label>
                    <p>Alınan Ceza</p>
                    <input type="number" min="0" max="100" name="penalty">
                </label>
                <label>
                    <p>Yol İzin Hakkı</p>
                    <select name="early-leave">
                        <option value="0">0 Gün (Yok)</option>
                        <option value="1">1 Gün</option>
                        <option value="2">2 Gün</option>
                        <option value="3">3 Gün</option>
                    </select>
                </label>
            </div>
            <div class="safak-wrapper">
                <input type="hidden" name="submit" value="1">
                <input type="submit" value="Hesapla">
            </div>
        </form>
        <div class="result">
            <div class="item">Askerlik Süresi:<?php ?></div>
        </div>
    </div>

</body>
</html>
