<?php 
    $total = 3 * 5;
    // string concatenation
    $name = 'Don ' . 'Castillo';
    $address = "$name 's address is 123 Faker Street";

    echo $total;
    echo '<br />';
    echo $name;
    echo '<br />';
    echo $address;
    echo '<br />';
    echo 5 == '5'; // true
    echo '<br />'; 
    echo 5 != '5'; // false
    echo '<br />'; 
    echo 5 !== '5'; // true
    echo '<br />';
    echo 5 === '5'; // false, data type and value should match for it to be true
    echo '<br />';
    echo 1 <=> 2; // -1 
    echo '<br />';
    echo 2 <=> 1; // 1 
    echo '<br />';
    echo 1 <=> 1; // 0
    echo '<br />';
    echo 1 && 1; // true
    echo '<br />';
    echo 1 and 1; // true
    echo '<br />';
    echo 1 || 1; // true
    echo '<br />';
    echo 1 or 1; // true
    echo '<br />';
    echo 1 + '1'; // string holds a valid integer. It is treated as an integer
    echo '<br />';
    echo 1 + '1.2'; // string holds a float. It is treated as a float
    echo '<br />';
    echo 1 + '1.2e+3'; // string holds a float using an e (exponent of 10). treated as a float.
    echo '<br />';
    echo '<br />';
    echo 'Truthsy and Falsy';
    echo '<br />';
    echo false ? 'true' : 'false';
    echo '<br />';
    echo 0 ? 'true' : 'false';
    echo '<br />';
    echo 0.0 ? 'true' : 'false';
    echo '<br />';
    echo '0' ? 'true' : 'false';
    echo '<br />';
    echo '' ? 'true' : 'false';
    echo '<br />';
    echo array() ? 'true' : 'false';
    echo '<br />';
    echo [] ? 'true' : 'false';
    echo '<br />';
    echo null ? 'true' : 'false';
?>