<?php

    // associative array
    $member = array(
        'first_name'    => 'Don',
        'last_name'     => 'Castillo',
        'address'       => array(
            'street'    => 'Unit A, 123 Street',
            'city'      => 'Lethbridge',
            'province'  => 'AB'   
        )
    );
    
?>

<hr>
<p><?= var_dump($member); ?></p>
<p>First name: <?= $member['first_name']; ?></p>
<p>Last name: <?= $member['last_name']; ?></p>
<p><?= var_dump($member['address']); ?></p>
<p>Address: <?= $member['address']['street']; ?>, <?= $member['address']['city']; ?>, <?= $member['address']['province']; ?></p>

<?php

    // indexed array
    $member = array('Don', 'Castillo', 'Unit A, 123 Street', 'Lethbridge', 'AB');
    
?>
<hr>
<p><?= var_dump($member); ?></p>
<p>First name: <?= $member[0]; ?></p>
<p>Last name: <?= $member[1]; ?></p>
<p>Address: <?= $member[2]; ?>, <?= $member[3]; ?>, <?= $member[4]; ?></p>