<?php require 'header.php'; ?>
<h1> Pastry List and Prices </h1>

<?php
$holidayDiscount = 0.12;

//Original Arrays from Activity 1
$pastries = ["Chocolate Cake Slice", "Vanilla Cupcake", "Strawberry Donut", "Chocolate Chip Cookies (3 pcs)", "Blueberry Muffin", "Cinnamon Roll", "Biscoff Cheese Cake Slice"];
$prices   = [95, 45, 35, 50, 40, 55, 85];
?>

<!-- For Loop -->
<table>
    <tr>
        <th>Pastry</th>
        <th>Price</th>
        <th>Discounted Price</th>
    </tr>

    <?php
    for ($i = 0; $i < count($pastries); $i++) {
        $discounted = $prices[$i] - ($prices[$i] * $holidayDiscount);
        echo "
        <tr>
            <td>{$pastries[$i]}</td>
            <td>₱ {$prices[$i]}</td>
            <td>₱ " . number_format($discounted, 2) . "</td>
        </tr>";
    }
    ?>
</table>

<?php require 'footer.php'; ?>
