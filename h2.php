<?php require "head.php"; ?>

<h2>Harjoitus 2</h2>
<p>
<form action="h2.php" method="get">
    Anna rahamäärä: <input type="number" name="money"><br>
    Anna hinta: <input type="number" name="price">
<input type="submit" value="Lähetä">
</form>
</p>

<?php

function change($price, $money){
    $change = $money - $price;
    if ($change >=0){
        echo "Saat takaisin $change €";
    } 
    else {
        echo "Lisää rahaa";
    }
}

if (isset($_GET['money'], $_GET['price'])){
    $money = $_GET['money'];
    $price = $_GET['price'];
    if (!empty($money) && !empty($price)){
    change($price, $money);
    } else{
        echo "Anna luvut";
    }
}


?>

<?php require "footer.php"; ?>