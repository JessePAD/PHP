<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>
<p>
<form action="h1.php" method="get">
    Anna rahamäärä:<input type="number" name="euro"><br>
<input type="submit" name="Lähetä">
</form>
</p>

<?php 

function laske($raha, $litrahinta){
    $vastaus = round($raha/$litrahinta, 2);
    return $vastaus;
}
if(isset($_GET['euro'])){
    $raha = $_GET['euro'];
    $litrahinta = 1.55;
    echo "Tulos on " . laske($raha, $litrahinta) . " ";
}

?>

<?php require "footer.php"; ?>