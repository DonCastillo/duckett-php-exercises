<?php
    $stock = 25;

    if($stock >= 10) {
        $message = 'Good availability';
    }
    if($stock > 0 && $stock < 10) {
        $message = 'Low stock';
    }
    if($stock == 0) {
        $message = 'Out of stock';
    }
?>

<?php require_once './header.php'; ?>
<h2>Chocolate</h2>
<p><?= $message ?></p>
<?php require_once './footer.php'; ?>

<!--
    include: the interpreter generates an error, but keeps trying to proess the rest of the page.
    require: the interpreter generates an error, then stops trying to process the rest of the page.
    include_once: same as include but ensures that include file is only rendered once;
    require_once: same as require but ensures that include file is only rendered once;
-->