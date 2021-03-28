<?php

// IMPORTING CONNECTION
include "./connection.php";

if (isset($_GET["id"])) {
  $id = mysqli_real_escape_string($connection, $_GET["id"]);

  //  SQL QUERY
  $sql = "SELECT * FROM details WHERE user_id = $id";

  // GETTING QUERY RESULT
  $result = mysqli_query($connection, $sql);

  // FETCHING RESULTS
  $pizza = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($connection);
}
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
    <link rel="stylesheet" href="../style/style.css">
    <title>PIZZA | DETAILS</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include "./header.php"; ?>
    <!-- END HEADER SECTION -->

    <div class="container text-center mt-2 mb-2 p-4 items">
        <?php if ($pizza): ?>
        <h1 class="display-4"><?php echo htmlspecialchars(
          $pizza["pizza_name"]
        ); ?></h1>
        <p class="lead">created by : <span class="text-lowercase"><?php echo htmlspecialchars(
          $pizza["email"]
        ); ?></span></p>
        <ul class="list-group">
            <h1 class="display-5">ingrediants</h1>
            <?php foreach (
              explode(",", $pizza["ingrediants_name"])
              as $ingrediant
            ): ?>
            <li class="list-group-item"><?php echo $ingrediant; ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="lead">created at: <?php echo date(
          $pizza["created_at"]
        ); ?></p>
        <?php else: ?>
        <h1 class="display-4">no data to show</h1>
        <?php endif; ?>
    </div>

    <!-- FOOTER SECTION -->
    <?php include "./footer.php"; ?>
    <!-- END FOOTER SECTION -->
</body>

</html>