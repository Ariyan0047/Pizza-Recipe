<?php

$errors = [
  "titleError" => "",
  "msgError" => "",
  "emailError" => "",
];

if (isset($_POST["submit"])) {
  if (empty($_POST["name"])) {
    $errors["titleError"] = "empty input field !!!!";
  } else {
    $title = $_POST["name"];
    if (!preg_match("/^[a-zA-z\s]+$/", $title)) {
      $errors["titleError"] = "Title must be letters !!!!";
    }
  }

  if (empty($_POST["msg"])) {
    $errors["msgError"] = "empty input field !!!!";
  } else {
    $msg = $_POST["msg"];
    if (!preg_match("/^([a-zA-z\s]+)(,\s*[a-zA-Z\s]*)*$/", $msg)) {
      $errors["msgError"] = "Ingredients should be comma separated !!!!";
    }
  }

  if (empty($_POST["email"])) {
    $errors["emailError"] = "empty input field !!!!";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors["emailError"] = "Ingredients should be comma separated !!!!";
    }
  }
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
    <title>PIZZA | FORM</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include "./header.php"; ?>
    <!-- END HEADER SECTION -->


    <form action="form.php" method="POST" class="container">
        <div class="mb-4">
            <label class="form-label">title</label>
            <input type="text" id="text" name="name" class="form-control">
            <h1 class="show"><?php echo $errors["titleError"]; ?></h1>
        </div>
        <div class="mb-4">
            <label class="form-label">ingrediants</label>
            <textarea name="msg" id="msg" class="form-control"></textarea>
            <h1 class="show"><?php echo $errors["msgError"]; ?></h1>
        </div>
        <div class="mb-4">
            <label class="form-label">email</label>
            <input type="text" id="email" name="email" class="form-control">
            <h1 class="show"><?php echo $errors["emailError"]; ?></h1>
        </div>
        <input type="submit" id="submit" name="submit" class="btn btn-primary mt-4" value="SUBMIT">
    </form>

    <!-- FOOTER SECTION -->
    <?php include "./footer.php"; ?>
    <!-- END FOOTER SECTION -->
</body>

</html>