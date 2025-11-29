<!--Maglalang, Alexie T | WD 201 -->
<!DOCTYPE html>
<html>
<head>
    <title>Sweet Cravings Pastry Shop</title>
    <link href="styles.css" rel="stylesheet">
</head>

<body>
<h1>🎄 Sweet Cravings Pastry Shop - Holiday Treats</h1>

<?php

//Variables
$holidayDiscount = 0.12;
$startDay = 12;
$endDay = 23;

//Expressions & Operators
$salesGoal = 50 + 50; 

//Type Juggling
$typeJuggle = "10" + 2; 

// Arrays
$pastries = ["Chocolate Cake Slice", "Vanilla Cupcake", "Strawberry Donut", "Chocolate Chip Cookies (3 pcs)", "Blueberry Muffin", "Cinnamon Roll", "Biscoff Cheese Cake Slice"];
$prices = [95, 45, 35, 50, 40, 55, 85];
?>

<p>For this Christmas, our shop will offer a <strong>12% discount</strong> for <strong>12 days</strong>, starting exactly 
<strong>12 noon</strong> from <strong>December <?= $startDay ?> to <?= $endDay ?></strong>.</p>

<p>We aim to sell <?= $salesGoal ?> pastries this December to celebrate the <strong><?= $typeJuggle ?>th anniversary</strong> of Sweet Cravings shop.</p>
  
<p>These pastries make perfect gifts and delicious Christmas treats! ❤️</p>

<table>
    <tr>
        <th>Pastries Available</th>
        <th>Price</th>
        <th>Discounted Price (12%)</th>
    </tr>

    <!-- Row 1 -->
    <tr>
        <td><?= $pastries[0] ?></td>
        <td>₱ <?= $prices[0] ?></td>
        <td>₱ <?= number_format($prices[0] - ($prices[0] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 2 -->
    <tr>
        <td><?= $pastries[1] ?></td>
        <td>₱ <?= $prices[1] ?></td>
        <td>₱ <?= number_format($prices[1] - ($prices[1] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 3 -->
    <tr>
        <td><?= $pastries[2] ?></td>
        <td>₱ <?= $prices[2] ?></td>
        <td>₱ <?= number_format($prices[2] - ($prices[2] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 4 -->
    <tr>
        <td><?= $pastries[3] ?></td>
        <td>₱ <?= $prices[3] ?></td>
        <td>₱ <?= number_format($prices[3] - ($prices[3] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 5 -->
    <tr>
        <td><?= $pastries[4] ?></td>
        <td>₱ <?= $prices[4] ?></td>
        <td>₱ <?= number_format($prices[4] - ($prices[4] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 6 -->
    <tr>
        <td><?= $pastries[5] ?></td>
        <td>₱ <?= $prices[5] ?></td>
        <td>₱ <?= number_format($prices[5] - ($prices[5] * $holidayDiscount), 2) ?></td>
    </tr>

    <!-- Row 7 -->
    <tr>
        <td><?= $pastries[6] ?></td>
        <td>₱ <?= $prices[6] ?></td>
        <td>₱ <?= number_format($prices[6] - ($prices[6] * $holidayDiscount), 2) ?></td>
    </tr>
</table>

</body>
</html>
