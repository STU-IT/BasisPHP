<?php

// her skal vi validere formen
$post = $_POST;

// opret forbindelse
$host = "localhost";
$user = "root";
$password = "";
$database = "restaurant";
$connection = mysqli_connect($host, $user, $password, $database);

// SQL kommando til at indsætte i tabellen dishes
$sql = "INSERT INTO `dishes` (`dish_name`, `price`, `is_spicy`) "
        . "VALUES ('$post[dish_name]', '$post[price]', '$post[is_spicy]');";
// udføre kommando
mysqli_query($connection, $sql);
// check at det virkede
mysqli_error($connection);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nye Retter</title>
    </head>
    <body>
        <form action="" method="post">
            navn:<input type="text" name="dish_name" ><br>
            pris:<input type="text" name="price"><br>
            Er krydret:<input type="checkbox" name="is_spicy" value="1"><br>
            
            <input type="submit" name="submit" value="opret">
        </form>
       
    </body>
</html>
