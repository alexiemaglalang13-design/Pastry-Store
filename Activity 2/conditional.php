<?php require 'header.php'; ?>

<h1> Conditional Statements in Our Pastry Shop</h1>

<!-- Discount Section -->
<div class="conditional-card">
    <?php
    $hour = 14;

    if ($hour >= 12) {
        echo "<p> You are eligible for our <strong>12% Christmas Discount!</strong></p>";
    } else {
        echo "<p>Discount starts at <strong>12 noon</strong>. Please come back later!</p>";
    }
    ?>
</div>

<!-- Store Hours Section -->
<div class="conditional-card">
    <?php
    $time = 18;

    if ($time < 12) {
        echo "<p>The store is preparing pastries. Opening soon!</p>";
    } elseif ($time <= 20) {
        echo "<p>We are <strong>OPEN</strong>! Come grab your treats </p>";
    } else {
        echo "<p>We are now closed. Please visit us tomorrow.</p>";
    }
    ?>
</div>

<!-- Pastry Availability Section -->
<div class="conditional-card">
    <?php
    $pastry = "Cinnamon Roll";

    switch ($pastry) {
        case "Chocolate Cake Slice":
            echo "<p>Chocolate Cake Slice is available today! </p>";
            break;
        case "Cinnamon Roll":
            echo "<p>Cinnamon Roll is freshly baked and available! </p>";
            break;
        default:
            echo "<p>That pastry is currently sold out. </p>";
    }
    ?>
</div>

<?php require 'footer.php'; ?>
