<?php require 'header.php'; ?>
<h1> Daily Updates </h1>

<!-- If-Else -->
<div class="conditional-card">
    <?php
    $month = "december";

    if ($month >= "december") {
        echo "<p>Sweet Cravings is getting ready to bake your <strong>Best Christmas Pastries</strong> this coming holidays!</p>";
    } else {
        echo "<p>Sorry. The 12% discount promo is only available on December 12 to 23.";
    }
    ?>
</div>

<div class="conditional-card">
    <p><strong>Anniversary Promo!</strong> To celebrate our 12th year anniversary, Sweet Cravings shop will offer 12% discount on all pastries. </p>
</div>

<!-- If-ElseIf -->
<div class="conditional-card">
    <?php
    $time = 12;

    if ($time < 12) {
        echo "<p>The store is preparing pastries. Opening soon!</p>";
    } elseif ($time <= 12) {
        echo "<p>We are <strong>OPEN</strong>! Come grab your treats </p>";
    } else {
        echo "<p>We are now closed. Please visit us tomorrow.</p>";
    }
    ?>
</div>

<!-- Switch Case -->
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
