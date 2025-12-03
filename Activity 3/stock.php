<?php
declare(strict_types=1);

require 'header.php';

$sweet_cravings = [
    "Chocolate Cake Slice"        => ["price" => 95.00, "stock" => 12],
    "Vanilla Cupcake"             => ["price" => 45.00,  "stock" => 34],
    "Strawberry Donut"            => ["price" => 35.00,  "stock" => 26],
    "Chocolate Chip Cookies"      => ["price" => 50.00, "stock" => 44],
    "Blueberry Muffin"            => ["price" => 40.00,  "stock" => 18],
    "Cinnamon Roll"               => ["price" => 55.00,  "stock" => 11],
    "Biscoff Cheese Cake Slice"   => ["price" => 85.00, "stock" => 10],
    "Choco Croissant"             => ["price" => 35.00,  "stock" => 9],
    "Brownies Box"                => ["price" => 150.00, "stock" => 7],
    "Egg Pie Bites"               => ["price" => 45.00,  "stock" => 27]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    return ($price * $qty) * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<body>
<h1>Stock Control</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-Order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php
    

    foreach ($sweet_cravings as $product_name => $data) {
        $price = $data["price"];
        $stock = $data["stock"];
    ?>
    <tr>
        <td><?= $product_name ?></td>
        <td><?= $stock ?></td>
        <td><?= get_reorder_message($stock) ?></td>
        <td>₱ <?= number_format(get_total_value($price, $stock), 2) ?></td>
        <td>₱ <?= number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
    </tr>
    <?php } ?>
</table>

<?php require 'footer.php'; ?>

</body>
</html>
