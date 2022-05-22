<?php
    $us_price = 4;
    $rates = [
        'uk' => 0.81,
        'eu' => 0.93,
        'jp' => 113.21
    ];

    function calculate_prices($usd, $exchange_rates) {
        $prices = [
            'pound' => $usd * $exchange_rates['uk'],
            'euro' => $usd * $exchange_rates['eu'],
            'yen' => $usd * $exchange_rates['jp'],
        ];
        return $prices;
    }

    $global_prices = calculate_prices($us_price, $rates);
?>

<h2>Chocolates</h2>
<p>US $<?= $us_price ?> </p>
<p>(UK &pound; <?= $global_prices['pound'] ?> | EU &euro; <?= $global_prices['euro'] ?> | JP &yen; <?= $global_prices['yen'] ?>)</p>