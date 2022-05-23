<?php
    function fullname(string $first, string $last): string {
        return $first . ' ' . $last;
    }
?>

<p>Full name: <?= fullname('Don', 'Castillo'); ?></p>