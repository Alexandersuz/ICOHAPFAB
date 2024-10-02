<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASL BELGISI uchun uy jihozlari mahsulotlarining identifikatsiya kodlari</title>
    <meta name="description" content="Uy jihozlari mahsulotlarining majburiy raqamli belgilanishiga doir identifikatsiya kodlari ro'yxati.">
    <meta name="keywords" content="identifikatsiya kodlari, uy jihozlari, raqamli belgilanish, O'zbekiston, TN VED, ASL BELGISI">
    <meta name="author" content="Про UZUM | prouzum.uz | Alexander.S">
    <link rel="stylesheet" href="resources/styles/styles.css">
</head>
<body>
    <div class="language-selector">
            <button class="lang-button" onclick="window.location.href='/ru'">Ру</button>
            <button class="lang-button" onclick="window.location.href='/uz'">Уз</button>
            <button class="lang-button" onclick="window.location.href='/oz'">O`z</button>
    </div>
    
    <header>
        Uy jihozlari mahsulotlarining identifikatsiya kodlari <br> va majburiy raqamli belgilanishi
    </header>
    
    <table>
    <thead>
        <tr>
            <th class="index-column">№ <br>п/п</th>
            <th class="product-name-column">Mahsulot nomi</th>
            <th class="tnved-position-column">TN VED <br>pozitsiyasi</th>
            <th class="tnved-code-column">TN VED <br>kodi*</th>
            <th class="product-id-code-class-column">Mahsulot identifikatsiya kodlari klassi</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $data = [
                ['Group' => 'Birinchi guruh'],
                ['Index' => '1', 'Product Name' => 'Pylesoslar', 'TNVED Position' => '8508', 'TNVED Code' => '8508110000<br>8508190001<br>8508190009', 'Product ID Code Class' => '08508'],
                ['Index' => '2', 'Product Name' => 'Kiruvchi mashinalari', 'TNVED Position' => '8450', 'TNVED Code' => '8450111100<br>8450111900<br>8450119000<br>8450120000<br>8450190000<br>8450200000', 'Product ID Code Class' => '08450'],
                ['Index' => '3', 'Product Name' => 'Murozilniklar, xollari', 'TNVED Position' => '8418', 'TNVED Code' => '8418102001<br>8418102009<br>8418108001<br>8418108009<br>8418211000<br>8418215100<br>8418215900<br>8418219100<br>8418219900<br>8418290000<br>8418302001<br>8418308001<br>8418402001<br>8418408001', 'Product ID Code Class' => '08418'],
                ['Index' => '4', 'Product Name' => 'Televizorlar va monitorlar', 'TNVED Position' => '8528', 'TNVED Code' => '8528491000<br>8528498002<br>8528498008<br>8528591000<br>8528599000<br>8528722001<br>8528722009<br>8528723001<br>8528723002<br>8528723003<br>8528723009<br>8528724000<br>8528726000', 'Product ID Code Class' => '08528'],
                ['Group' => 'Ikkinchi guruh'],
                ['Index' => '1', 'Product Name' => 'Ishlab chiqaruvchi gaz pechlari', 'TNVED Position' => '7321', 'TNVED Code' => '7321111000<br>7321119000', 'Product ID Code Class' => '07321'],
                ['Index' => '2', 'Product Name' => 'Oʼtkazgichlar', 'TNVED Position' => '8414', 'TNVED Code' => '8414600000', 'Product ID Code Class' => '08414'],
                ['Index' => '3', 'Product Name' => 'Duxovkalar va pechlar', 'TNVED Position' => '8516', 'TNVED Code' => '8516601010<br>8516601090<br>8516605000<br>8516607000<br>8516608000<br>8516609000', 'Product ID Code Class' => '08516'],
                ['Index' => '4', 'Product Name' => 'Mikrovolnovka pechlari, temirlar, suv isitish uskunalari', 'TNVED Position' => '8516', 'TNVED Code' => '8516101100<br>8516310000<br>8516400000<br>8516500000', 'Product ID Code Class' => '08516'],
                ['Group' => 'Uchinchi guruh'],
                ['Index' => '1', 'Product Name' => 'Suv isituvchi qotilalar', 'TNVED Position' => '8403', 'TNVED Code' => '8403109000', 'Product ID Code Class' => '08403'],
                ['Index' => '2', 'Product Name' => 'Konditsionerlar**', 'TNVED Position' => '8415', 'TNVED Code' => '8415101000<br>8415109000<br>8415810010<br>8415810090<br>8415820000', 'Product ID Code Class' => '08415'],
                ['Index' => '3', 'Product Name' => 'Ichki elektr motorli uy texnikasi (sok shijaklari, blenderlar, mikserlar, qahva maydalovchilar, goʼsht maydalovchilar)', 'TNVED Position' => '8509', 'TNVED Code' => '8509400000', 'Product ID Code Class' => '08509'],
                ['Index' => '4', 'Product Name' => 'Har xil lampalar', 'TNVED Position' => '8539<br>8540', 'TNVED Code' => '8539100009<br>8539500000<br>8540810000<br>8540890000', 'Product ID Code Class' => '08539<br>08540'],
            ];

            foreach ($data as $row) {
                if (isset($row['Group'])) {
                    echo '<tr><td colspan="5" style="font-weight:bold; text-align:center; background-color:#e9ecef;">' . $row['Group'] . '</td></tr>';
                } else {
                    echo "<tr>";
                    echo "<td>" . $row['Index'] . "</td>";
                    echo "<td>" . $row['Product Name'] . "</td>";
                    echo "<td>" . $row['TNVED Position'] . "</td>";
                    echo "<td>" . nl2br($row['TNVED Code']) . "</td>";
                    echo "<td>" . nl2br($row['Product ID Code Class']) . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <div class="form-container">
        <div class="form">
            <p>* TN VED va IKPU kodlari O'zbekiston Respublikasi Davlat soliq qo'mitasi tomonidan o'zgartirilishi mumkin.</p>
            <p>** Koniditsionerlar ichki va tashqi qurilmalariga ega bo'lsa, ichki qurilmaning raqamli belgilanishi ko'rsatiladi.</p>
        </div>
        <div class="form">
            <p>Qo'shimcha tushuntirishlar va tovarlarning klassifikatsiyasi bo'yicha xulosa olish zarur bo'lsa, Investitsiyalar, sanoat va savdo vazirligiga va bojxona qo'mitasiga murojaat qilishni tavsiya etamiz.</p>
            <p>Uy jihozlari belgilanishi 2022 yil 15 aprelida Vazirlar Mahkamasining <a href="https://lex.uz/docs/5939822" target="_blank">№ 148</a> qaroriga muvofiq boshlangan.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 ASL BELGISI raqamli belgilanishi bo'yicha ma'lumotlar. Barcha huquqlar himoyalangan.</p>
    </footer>
</body>
</html>
