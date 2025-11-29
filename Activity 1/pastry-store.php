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
?>

<p>For this Christmas, our shop will offer a <strong>12% discount</strong> for <strong>12 days</strong>, starting exactly 
<strong>12 noon</strong> from <strong>December <?= $startDay ?> to <?= $endDay ?></strong>.</p>

<p>We aim to sell <?= $salesGoal ?> pastries this December to celebrate the <strong><?= $typeJuggle ?>th anniversary</strong> of Sweet Cravings shop.</p>

<p>These pastries make perfect gifts and delicious Christmas treats! ❤️</p>


<?php
// Arrays
$pastries = ["Chocolate Cake Slice", "Vanilla Cupcake", "Strawberry Donut", "Chocolate Chip Cookies (3 pcs)", "Blueberry Muffin", "Cinnamon Roll", "Biscoff Cheese Cake Slice"];
$prices = [95, 45, 35, 50, 40, 55, 85];
?>

<table>
    <tr>
        <th>Pastries Available</th>
        <th>Price</th>
        <th>Discounted Price (12%)</th>
    </tr>

<?php

// Loop
for ($index = 0; $index < 7; $index++) {

    $name = $pastries[$index];
    $price = $prices[$index];
    $discounted = $price - ($price * $holidayDiscount);
?>
    <tr>
        <td><?= $name ?></td>
        <td>₱  <?= $price ?></td>
        <td>₱  <?= number_format($discounted, 2) ?></td>
    </tr>
<?php
}
?>
</table>

</body>
</html>
