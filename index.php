<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Идентификационные коды продукции бытовой техники для ASL BELGISI</title>
    <meta name="description" content="Перечень идентификационных кодов продукции бытовой техники с обязательной цифровой маркировкой в соответствии с постановлением правительства Узбекистана.">
    <meta name="keywords" content="идентификационные коды, бытовая техника, цифровая маркировка, Узбекистан, ТН ВЭД, ASL BELGISI">
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
        Перечень <br>идентификационных кодов продукции бытовой техники с обязательной цифровой маркировкой
    </header>
    
    <table>
    <thead>
        <tr>
            <th class="index-column">№ <br>п/п</th>
            <th class="product-name-column">Название продукта</th>
            <th class="tnved-position-column">Позиция <br>ТН ВЭД</th>
            <th class="tnved-code-column">Код <br>ТН ВЭД*</th>
            <th class="product-id-code-class-column">Код класса идентификационных кодов продукции</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $data = [
                ['Group' => 'Первая группа'],
                ['Index' => '1', 'Product Name' => 'Пылесосы', 'TNVED Position' => '8508', 'TNVED Code' => '8508110000<br>8508190001<br>8508190009', 'Product ID Code Class' => '08508'],
                ['Index' => '2', 'Product Name' => 'Стиральные машины', 'TNVED Position' => '8450', 'TNVED Code' => '8450111100<br>8450111900<br>8450119000<br>8450120000<br>8450190000<br>8450200000', 'Product ID Code Class' => '08450'],
                ['Index' => '3', 'Product Name' => 'Холодильники, морозильники', 'TNVED Position' => '8418', 'TNVED Code' => '8418102001<br>8418102009<br>8418108001<br>8418108009<br>8418211000<br>8418215100<br>8418215900<br>8418219100<br>8418219900<br>8418290000<br>8418302001<br>8418308001<br>8418402001<br>8418408001', 'Product ID Code Class' => '08418'],
                ['Index' => '4', 'Product Name' => 'Телевизоры и мониторы', 'TNVED Position' => '8528', 'TNVED Code' => '8528491000<br>8528498002<br>8528498008<br>8528591000<br>8528599000<br>8528722001<br>8528722009<br>8528723001<br>8528723002<br>8528723003<br>8528723009<br>8528724000<br>8528726000', 'Product ID Code Class' => '08528'],
                ['Group' => 'Вторая группа'],
                ['Index' => '1', 'Product Name' => 'Бытовые газовые печи', 'TNVED Position' => '7321', 'TNVED Code' => '7321111000<br>7321119000', 'Product ID Code Class' => '07321'],
                ['Index' => '2', 'Product Name' => 'Вытяжки', 'TNVED Position' => '8414', 'TNVED Code' => '8414600000', 'Product ID Code Class' => '08414'],
                ['Index' => '3', 'Product Name' => 'Духовки и печи', 'TNVED Position' => '8516', 'TNVED Code' => '8516601010<br>8516601090<br>8516605000<br>8516607000<br>8516608000<br>8516609000', 'Product ID Code Class' => '08516'],
                ['Index' => '4', 'Product Name' => 'Микроволновые печи, утюги, водонагреватели', 'TNVED Position' => '8516', 'TNVED Code' => '8516101100<br>8516310000<br>8516400000<br>8516500000', 'Product ID Code Class' => '08516'],
                ['Group' => 'Третья группа'],
                ['Index' => '1', 'Product Name' => 'Водонагревательные котлы', 'TNVED Position' => '8403', 'TNVED Code' => '8403109000', 'Product ID Code Class' => '08403'],
                ['Index' => '2', 'Product Name' => 'Кондиционеры**', 'TNVED Position' => '8415', 'TNVED Code' => '8415101000<br>8415109000<br>8415810010<br>8415810090<br>8415820000', 'Product ID Code Class' => '08415'],
                ['Index' => '3', 'Product Name' => 'Встраиваемая электромоторная бытовая техника (соковыжималки, блендеры, миксеры, кофемолки, мясорубки)', 'TNVED Position' => '8509', 'TNVED Code' => '8509400000', 'Product ID Code Class' => '08509'],
                ['Index' => '4', 'Product Name' => 'Лампы всех видов', 'TNVED Position' => '8539<br>8540', 'TNVED Code' => '8539100009<br>8539500000<br>8540810000<br>8540890000', 'Product ID Code Class' => '08539<br>08540'],
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
            <p>* Перечисленные коды ТН ВЭД и ИКПУ могут быть изменены Государственным налоговым комитетом Республики Узбекистан по согласованию с оператором НИС «Asl belgisi»</p>
            <p>** Для кондиционеров, которые имеют два типа устройств (внутреннее и внешнее), указывается только цифровая маркировка внутреннего устройства.</p>
        </div>
        <div class="form">
            <p>В случае необходимости получения дополнительных разъяснений и заключения по классификации товаров, рекомендуем обратиться в Министерство инвестиций, промышленности и торговли и в Таможенный комитет.</p>
            <p>Маркировка бытовой техники стартовала 15 апреля 2022 года в соответствие с Постановлением Кабинета Министров <a href="https://lex.uz/docs/5939822" target="_blank">№ 148</a> от 02.04.2022 г.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Справочная информация о цифровой маркировке ASL BELGISI. Все права защищены.</p>
    </footer>
</body>
</html>
