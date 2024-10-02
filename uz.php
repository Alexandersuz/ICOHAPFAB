<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Маиший техника маҳсулотларининг идентификацион кодлари ASL BELGISI учун</title>
    <meta name="description" content="Маиший техника маҳсулотларининг идентификацион кодлари рўйхати, Ўзбекистон Республикаси ҳукуматининг қарорига мувофиқ мажбурий рақамли маркировка билан.">
    <meta name="keywords" content="идентификацион кодлар, маиший техника, рақамли маркировка, Ўзбекистон, ТН ВЭД, ASL BELGISI">
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
        Маиший техника маҳсулотларининг идентификацион кодлари рўйхати <br> мажбурий рақамли маркировка билан
    </header>
    
    <table>
    <thead>
        <tr>
            <th class="index-column">№ <br>п/п</th>
            <th class="product-name-column">Маҳсулот номи</th>
            <th class="tnved-position-column">ТН ВЭД <br>позицияси</th>
            <th class="tnved-code-column">ТН ВЭД <br>коди*</th>
            <th class="product-id-code-class-column">Маҳсулот идентификацион кодлари синфи коди</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $data = [
                ['Group' => 'Биринчи гуруҳ'],
                ['Index' => '1', 'Product Name' => 'Пылесослар', 'TNVED Position' => '8508', 'TNVED Code' => '8508110000<br>8508190001<br>8508190009', 'Product ID Code Class' => '08508'],
                ['Index' => '2', 'Product Name' => 'Кириш машиналари', 'TNVED Position' => '8450', 'TNVED Code' => '8450111100<br>8450111900<br>8450119000<br>8450120000<br>8450190000<br>8450200000', 'Product ID Code Class' => '08450'],
                ['Index' => '3', 'Product Name' => 'Морозильниклар, хўллари', 'TNVED Position' => '8418', 'TNVED Code' => '8418102001<br>8418102009<br>8418108001<br>8418108009<br>8418211000<br>8418215100<br>8418215900<br>8418219100<br>8418219900<br>8418290000<br>8418302001<br>8418308001<br>8418402001<br>8418408001', 'Product ID Code Class' => '08418'],
                ['Index' => '4', 'Product Name' => 'Телевизорлар ва мониторлар', 'TNVED Position' => '8528', 'TNVED Code' => '8528491000<br>8528498002<br>8528498008<br>8528591000<br>8528599000<br>8528722001<br>8528722009<br>8528723001<br>8528723002<br>8528723003<br>8528723009<br>8528724000<br>8528726000', 'Product ID Code Class' => '08528'],
                ['Group' => 'Иккинчи гуруҳ'],
                ['Index' => '1', 'Product Name' => 'Ишлаб чиқарувчи газ печлари', 'TNVED Position' => '7321', 'TNVED Code' => '7321111000<br>7321119000', 'Product ID Code Class' => '07321'],
                ['Index' => '2', 'Product Name' => 'Ўтказгичлар', 'TNVED Position' => '8414', 'TNVED Code' => '8414600000', 'Product ID Code Class' => '08414'],
                ['Index' => '3', 'Product Name' => 'Духовкалар ва печлар', 'TNVED Position' => '8516', 'TNVED Code' => '8516601010<br>8516601090<br>8516605000<br>8516607000<br>8516608000<br>8516609000', 'Product ID Code Class' => '08516'],
                ['Index' => '4', 'Product Name' => 'Микроволновка печлари, темирлар, сув иситиш ускуналари', 'TNVED Position' => '8516', 'TNVED Code' => '8516101100<br>8516310000<br>8516400000<br>8516500000', 'Product ID Code Class' => '08516'],
                ['Group' => 'Учинчи гуруҳ'],
                ['Index' => '1', 'Product Name' => 'Сув иситувчи қотиллар', 'TNVED Position' => '8403', 'TNVED Code' => '8403109000', 'Product ID Code Class' => '08403'],
                ['Index' => '2', 'Product Name' => 'Кондиционерлар**', 'TNVED Position' => '8415', 'TNVED Code' => '8415101000<br>8415109000<br>8415810010<br>8415810090<br>8415820000', 'Product ID Code Class' => '08415'],
                ['Index' => '3', 'Product Name' => 'Ички электр моторли уй техникаси (сок шижаклари, блендерлар, миксерлар, қаҳва майдаловчилар, гўшт майдаловчилар)', 'TNVED Position' => '8509', 'TNVED Code' => '8509400000', 'Product ID Code Class' => '08509'],
                ['Index' => '4', 'Product Name' => 'Ҳар хил лампалар', 'TNVED Position' => '8539<br>8540', 'TNVED Code' => '8539100009<br>8539500000<br>8540810000<br>8540890000', 'Product ID Code Class' => '08539<br>08540'],
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
            <p>* Келтирилган ТН ВЭД ва ИКПУ кодлари Ўзбекистон Республикаси Давлат солиқ қўмитаси томонидан НИС «Asl belgisi» оператори билан келишилган ҳолда ўзгартирилиши мумкин.</p>
            <p>** Иккита турдаги ускуналарга эга бўлган кондиционерлар учун (ички ва ташқи), фақат ички ускунанинг рақамли маркировкаси кўрсатилади.</p>
        </div>
        <div class="form">
            <p>Маҳсулотларни классификация қилиш бўйича қўшимча тушунтиришлар ва хулоса олиш зарурати туғилганда, Инвестициялар, саноат ва савдо вазирлигига ҳамда Божхона қўмитасига мурожаат қилишни тавсия қиламиз.</p>
            <p>Маиший техника маҳсулотларининг маркировкаси 2022 йил 15 апрелдан бошланган бўлиб, Вазирлар Маҳкамасининг <a href="https://lex.uz/docs/5939822" target="_blank">№ 148</a> қарорига мувофиқ 2022 йил 2 апрелда қабул қилинган.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 ASL BELGISI рақамли маркировка бўйича маълумот. Барча ҳуқуқлар ҳимояланган.</p>
    </footer>
</body>
</html>
