<?php require 'header.php'; ?>

<h1> Pastry List & PHP Loops </h1>

<?php
$holidayDiscount = 0.12;

// Original Arrays (your pastries)
$pastries = ["Chocolate Cake Slice", "Vanilla Cupcake", "Strawberry Donut", "Chocolate Chip Cookies (3 pcs)", "Blueberry Muffin", "Cinnamon Roll", "Biscoff Cheese Cake Slice"];
$prices   = [95, 45, 35, 50, 40, 55, 85];
?>

<h2> Discounted Pastries (Using FOR Loop)</h2>

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


<!-- WHILE LOOP -->
<h2> Top Customers of the Month (Using WHILE Loop)</h2>

<?php
$customers = ["Ava Santos", "Liam Cruz", "Sofia Dizon", "Noah Reyes"];
$rank = 0;

while ($rank < count($customers)) {
    echo "<p>Rank " . ($rank+1) . ": <strong>{$customers[$rank]}</strong></p>";
    $rank++;
}
?>


<!-- DO-WHILE LOOP -->
<h2> Christmas Countdown Messages (Using DO-WHILE Loop)</h2>

<?php
$daysLeft = 3;

do {
    echo "<p>Only <strong>$daysLeft days</strong> before Christmas! </p>";
    $daysLeft--;
} while ($daysLeft > 0);
?>


<!-- FOREACH LOOP -->
<h2> Best-Selling Items (Using FOREACH Loop)</h2>

<?php
$bestSellers = [
    "Chocolate Chip Cookies (3 pcs)" => "120 boxes sold",
    "Vanilla Cupcake" => "95 boxes sold",
    "Cinnamon Roll" => "80 boxes sold"
];

foreach ($bestSellers as $item => $sales) {
    echo "<p><strong>$item</strong> — $sales</p>";
}
?>

<?php require 'footer.php'; ?>
