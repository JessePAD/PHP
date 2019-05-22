<?php require "head.php"; ?>

<h2>Harjoitus 4.1.</h2>

<?php
    $task = [
        "tehtävä" => "Osta piimää",
        "deadline" => "1.6.2019",
        "vastuuhenkilö" =>"Jesse Pekkala",
        "valmis" => true
    ]
?>

<ul>
    <li class="bullet">
        <?= "Tehtävä: " . $task["tehtävä"] ?>
    </li>

    <li class="bullet">
        <?= "Valmis: " . ($task["valmis"] ? "valmis" : "kesken") ?>
    </li>
</ul>

<?php require "footer.php"; ?>