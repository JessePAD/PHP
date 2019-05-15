<?php require "head.php"; ?>

<form action="index.php" method="get">
    Etunimi:    <input type="text" name="name" maxlength=30><br>
    Ikä:        <input type="number" name="age"><br>
                <input type="submit" value="Lähetä">
</form>

<?php

function tervehdys ($nimi, $ika){
    return "Mitä kuuluu " . $nimi . "Olet " . $ika . " vuotta vanha";
}

    if(isset($_GET['name']) && isset($_GET['age'])){
        $nimi = $_GET['name'];
        $ika = $_GET['age'];
        echo "Vastaus: ", tervehdys($nimi, $ika);
    }
?>

<?php require "footer.php"; ?>