<?php

// DATABASE CONNECTION
$connection = mysqli_connect(
  "localhost",
  "aariyan0047",
  "Realmadrid027742909",
  "pizza"
);

// CHECKING CONNECTION
if (!$connection) {
  echo "Error:" . mysqli_connect_error();
}

// QUERY FOR ALL DATA
$sql = "SELECT user_id,pizza_name,ingrediants_name FROM details";

// MAKE QUERY AND GET RESULT
$result = mysqli_query($connection, $sql);

// FETCHING RESULTS AS AN ARRAY
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// FREEING MEMORY
mysqli_free_result($result);

// CLOSE CONNECTION
mysqli_close($connection);

print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include "./templates/header.php"; ?>
    <!-- END HEADER SECTION -->

    <!-- FOOTER SECTION -->
    <?php include "./templates/footer.php"; ?>
    <!-- END FOOTER SECTION -->
</body>

</html>