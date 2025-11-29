<?php require 'header.php'; ?>
<h1> About Us</h1>

<div class="conditional-card">
    <p>Welcome to <strong>Sweet Cravings</strong>, your go-to pastry shop for delicious, freshly baked treats! We make pastries <br>
     perfect for every craving, whether it's a sweet treat for yourself or something to share with loved ones.
    </p>
</div>

<!-- While Loop -->
<h2> Top Customers of the Month </h2>
<?php
$customers = ["Alexie Maglalang", "Jeon Jungkook", "Park Jimin"];
$rank = 0;

while ($rank < count($customers)) {
    echo "<p>Rank " . ($rank+1) . ": <strong>{$customers[$rank]}</strong></p>";
    $rank++;
}
?>

<!-- ForEach LOOP -->
<h2> Best Selling Items</h2>
<?php
$bestSellers = [ "Cinnamon Roll" => "120 pieces sold",
                "Strawberry Donut" => "150 donuts sold",
                "Biscoff Cheese Cake Slice" => "180 slices sold"
];

foreach ($bestSellers as $pastry => $sales) {
    echo "<p><strong>$pastry</strong> - $sales</p>";
}
?>

<?php require 'footer.php'; ?>
