// result.php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $product = $data['product'];
    $total_price = $data['total_price'];
    $total_price_with_tax = $data['total_price_with_tax'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Résultat de la facture</title>
    </head>

    <body>
        <h1>Résultat de la facture</h1>
        <p>Produit: <?php echo htmlspecialchars($product); ?></p>
        <p>Prix total: <?php echo htmlspecialchars($total_price); ?></p>
        <p>Prix total avec taxes: <?php echo htmlspecialchars($total_price_with_tax); ?></p>
    </body>

    </html>
<?php
}
?>