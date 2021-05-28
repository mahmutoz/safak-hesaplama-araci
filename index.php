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
        <div class="error-message"><?php if($errorMsg != null) echo $errorMsg ?></div>
        <h2 class="safak-title">ŞAFAK HESAPLAMA ARACI</h2>
        <p class="safak-text"><span class="star">*</span> Doldurulması zorunlu alanlar.</p>
        <form action="" method="post" class="safak-form">
            <div class="safak-wrapper">
                <label>
                    <p>Askerlik Süresi <span class="star">*</span></p>
                    <select name="military-service-time">
                        <option <?php echo post('military-service-time') == 0 ? ' selected' : null; ?> value="0">Seçiniz</option>
                        <option <?php echo post('military-service-time') == 30 ? ' selected' : null; ?> value="30">1 Ay (Bedelli)</option>
                        <option <?php echo post('military-service-time') == 180 ? ' selected' : null; ?> value="180">6 Ay (Er/Erbaş)</option>
                        <option <?php echo post('military-service-time') == 360 ? ' selected' : null; ?> value="360">12 Ay (Yedek Subay/ Astsubay)</option>
                    </select>
                </label>
                <label>
                    <p>Sevk Tarihi <span class="star">*</span></p>
                    <input type="date" name="ship-date" value="<?php echo post('ship-date') ? post('ship-date') : null; ?>" min="<?php echo date('Y-m-d', strtotime('-365 day')) ?>" required>
                </label>
                <label>
                    <p>Kullanılan İzin</p>
                    <select name="permission-used">
                        <option <?php echo post('permission-used') == 0 ? ' selected' : null; ?> value="0">0 Gün (İzin kullanmadım)</option>
                        <option <?php echo post('permission-used') == 1 ? ' selected' : null; ?> value="1">1 Gün</option>
                        <option <?php echo post('permission-used') == 2 ? ' selected' : null; ?> value="2">2 Gün</option>
                        <option <?php echo post('permission-used') == 3 ? ' selected' : null; ?> value="3">3 Gün</option>
                        <option <?php echo post('permission-used') == 4 ? ' selected' : null; ?> value="4">4 Gün</option>
                        <option <?php echo post('permission-used') == 5 ? ' selected' : null; ?> value="5">5 Gün</option>
                        <option <?php echo post('permission-used') == 6 ? ' selected' : null; ?> value="6">6 Gün</option>
                        <option <?php echo post('permission-used') == 7 ? ' selected' : null; ?> value="7">7 Gün</option>
                        <option <?php echo post('permission-used') == 8 ? ' selected' : null; ?> value="8">8 Gün</option>
                        <option <?php echo post('permission-used') == 9 ? ' selected' : null; ?> value="9">9 Gün</option>
                        <option <?php echo post('permission-used') == 10 ? ' selected' : null; ?> value="10">10 Gün</option>
                        <option <?php echo post('permission-used') == 11 ? ' selected' : null; ?> value="11">11 Gün</option>
                        <option <?php echo post('permission-used') == 12 ? ' selected' : null; ?> value="12">12 Gün</option>
                        <option <?php echo post('permission-used') == 13 ? ' selected' : null; ?> value="13">13 Gün</option>
                        <option <?php echo post('permission-used') == 14 ? ' selected' : null; ?> value="14">14 Gün</option>
                        <option <?php echo post('permission-used') == 15 ? ' selected' : null; ?> value="15">15 Gün</option>
                        <option <?php echo post('permission-used') == 16 ? ' selected' : null; ?> value="16">16 Gün</option>
                        <option <?php echo post('permission-used') == 17 ? ' selected' : null; ?> value="17">17 Gün</option>
                        <option <?php echo post('permission-used') == 18 ? ' selected' : null; ?> value="18">18 Gün</option>
                        <option <?php echo post('permission-used') == 19 ? ' selected' : null; ?> value="19">19 Gün</option>
                        <option <?php echo post('permission-used') == 20 ? ' selected' : null; ?> value="20">20 Gün</option>
                        <option <?php echo post('permission-used') == 21 ? ' selected' : null; ?> value="21">21 Gün</option>
                        <option <?php echo post('permission-used') == 22 ? ' selected' : null; ?> value="22">22 Gün</option>
                        <option <?php echo post('permission-used') == 23 ? ' selected' : null; ?> value="23">23 Gün</option>
                        <option <?php echo post('permission-used') == 24 ? ' selected' : null; ?> value="24">24 Gün</option>
                    </select>
                </label>
            </div>
            <div class="safak-wrapper">
                <label>
                    <p>Yol İzin Hakkı</p>
                    <select name="road-permission">
                        <option <?php echo post('road-permission') == 0 ? ' selected' : null; ?> value="0">0 Gün</option>
                        <option <?php echo post('road-permission') == 1 ? ' selected' : null; ?> value="1">1 Gün</option>
                        <option <?php echo post('road-permission') == 2 ? ' selected' : null; ?> value="2">2 Gün</option>
                        <option <?php echo post('road-permission') == 3 ? ' selected' : null; ?> value="3">3 Gün</option>
                        <option <?php echo post('road-permission') == 4 ? ' selected' : null; ?> value="4">4 Gün</option>
                    </select>
                </label>
                <label>
                    <p>TMİ Yol İzni</p>
                    <select name="tmi-road-permission">
                        <option <?php echo post('tmi-road-permission') == 0 ? ' selected' : null; ?> value="0">0 Gün</option>
                        <option <?php echo post('tmi-road-permission') == 1 ? ' selected' : null; ?> value="1">1 Gün</option>
                        <option <?php echo post('tmi-road-permission') == 2 ? ' selected' : null; ?> value="2">2 Gün</option>
                    </select>
                </label>
                <label>
                    <p>Hava Değişimi/İstirahat Süresi</p>
                    <input type="number" min="0" max="100" name="sick-leave" value="<?php echo post('sick-leave') ? post('sick-leave') : null; ?>" placeholder="0 Gün">
                </label>
            </div>
            <div class="safak-wrapper">
                <label>
                    <p>Firar/İzin Tecavüzü/Geç Katılış</p>
                    <input type="number" min="0" max="100" name="escape" value="<?php echo post('escape') ? post('escape') : null; ?>" placeholder="0 Gün">
                </label>
                <label>
                    <p>Alınan Ceza</p>
                    <input type="number" min="0" max="100" name="penalty" value="<?php echo post('penalty') ? post('penalty') : null; ?>" placeholder="0 Gün (Ceza Almadım)">
                </label>
                <label>
                    <p>Erken Terhis</p>
                    <select name="early-leave">
                        <option <?php echo post('early-leave') == 0 ? ' selected' : null; ?> value="0">0 Gün (Yok)</option>
                        <option <?php echo post('early-leave') == 1 ? ' selected' : null; ?> value="1">1 Gün</option>
                        <option <?php echo post('early-leave') == 2 ? ' selected' : null; ?> value="2">2 Gün</option>
                        <option <?php echo post('early-leave') == 3 ? ' selected' : null; ?> value="3">3 Gün</option>
                    </select>
                </label>
            </div>
            <div class="safak-buttons">
                <input type="hidden" name="submit" value="1">
                <input type="submit" value="Hesapla">
                <input type="button" value="Sıfırla" onclick="fun()">
            </div>
        </form>
        <?php if(post('submit') && null == $errorMsg ): ?>
            <div class="result">
                <h3 class="safak-result">SONUÇLAR</h3>
                <table class="table-fill">
                    <tbody class="table-hover">
                    <tr>
                        <td class="text-left">Askerlik Süresi</td>
                        <td class="text-left"><?php echo $militaryServiceTimeResult . ' Gün'; ?></td>
                    </tr>
                    <tr>
                        <td class="text-left">Kalan Kanuni İzin Hakkı</td>
                        <td class="text-left"><?php echo $remainLeaveResult . ' Gün'; ?></td>
                    </tr>
                    <tr>
                        <td class="text-left">Resmi Terhis Tarihi</td>
                        <td class="text-left"><?php echo $leaveFormatTimeResult . ' ' . $days[date('l', strtotime($leaveTimeResult))] . ' Günü'; ?></td>
                    </tr>
                    <tr>
                        <td class="text-left">TMİ (Terhis Mahiyetinde İzin)</td>
                        <td class="text-left"><?php echo $tmiFormatResult . ' ' . $days[date('l', strtotime($tmiResult))] . ' Günü'; ?></td>
                    </tr>
                    <tr>
                        <td class="text-left">TMİ'ye kalan süre</td>
                        <td class="text-left"><?php echo $remainTMIResult . ' Gün'; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        const err = document.querySelector('.error-message');
        if(err.textContent !== ''){
            err.classList.add('active');
            setTimeout(() => {
                err.classList.remove('active');
            }, 3000);
        }
        function fun(){
            location.reload();
        }
    </script>
</body>
</html>
