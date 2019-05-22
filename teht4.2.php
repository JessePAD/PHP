<?php require "head.php"; ?>

<h2>Harjoitus 4.2.</h2>

<?php
    $task1 = [
        "tehtävä" => "Osta piimää",
        "deadline" => "1.6.2019",
        "vastuuhenkilö" =>"Jesse Pekkala",
        "valmis" => true
    ];
    $task2 = [
        "tehtävä" => "Lähde kotiin",
        "deadline" => "1.7.2019",
        "vastuuhenkilö" =>"Susanna Kissanen",
        "valmis" => false
    ];
    $task3 = [
        "tehtävä" => "Osta bussilippu",
        "deadline" => "5.7.2019",
        "vastuuhenkilö" =>"Minna Liukkonen",
        "valmis" => false
    ];

$tasks = [$task1, $task2, $task3];

foreach($tasks as $task): ?>
<ul>
    <li class="bullet">
        <?= "Tehtävä: " . $task["tehtävä"] ?>
    </li>

    <li class="bullet">
        <?= "Valmis: " . ($task["valmis"] ? "valmis" : "kesken") ?>
    </li>
</ul>
<?php endforeach ?>

<?php foreach($tasks as $task): ?>
<ul>
    <?php
        foreach($task as $key => $value){
            if($key === "valmis"){
            echo "<li>" . ucwords($key) . ":" . ($value ? "valmis" : "kesken") . "</li>";
            } else {
            echo "<li>" . ucwords($key) . ": $value </li>";
        }
    }
    ?>
</ul>
<?php endforeach ?>

<?php    
    // echo "<pre>";
    // print_r($task);
    // echo "</pre>";

?>    

<?php require "footer.php"; ?>