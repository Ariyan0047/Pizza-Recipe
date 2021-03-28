<?php

// IMPORTING CONNECTION
include "./templates/connection.php";

// QUERY FOR ALL DATA
$sql =
  "SELECT user_id,pizza_name,ingrediants_name FROM details ORDER BY created_at";

// MAKE QUERY AND GET RESULT
$result = mysqli_query($connection, $sql);

// FETCHING RESULTS AS AN ARRAY
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// FREEING MEMORY
mysqli_free_result($result);

// CLOSE CONNECTION
mysqli_close($connection);

// print_r($pizzas);
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
    <link rel="stylesheet" href="./style/style.css" />
    <title>PIZZA | RECIPE</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include "./templates/header.php"; ?>
    <!-- END HEADER SECTION -->

    <div class="container">
        <h1 class="display-4 text-center text-muted">pizza's</h1>
        <div class="row justify-content-center">
            <?php foreach ($pizzas as $pizza): ?>
            <div class="col-md-3 mr-4 ml-4">
                <div class="card text-center" style="width: 20rem;">
                    <img class="card-img-top" src="img\pizza1.jpg">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo htmlspecialchars(
                          $pizza["pizza_name"]
                        ); ?></h3>
                        <ul class="list-group">
                            <?php foreach (
                              explode(",", $pizza["ingrediants_name"])
                              as $ingrediant
                            ): ?>
                            <li class="list-group-item"><?php echo htmlspecialchars(
                              $ingrediant
                            ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <hr>
                        <a href="./templates/details.php?id=<?php echo $pizza[
                          "user_id"
                        ]; ?>" class="btn btn-primary">more info</a>
                        <hr>
                        <a href="#" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <?php include "./templates/footer.php"; ?>
    <!-- END FOOTER SECTION -->
</body>

</html>