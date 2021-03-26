<?php
if (isset($_POST["submit"])) {
  echo htmlspecialchars($_POST["name"]);
  echo htmlspecialchars($_POST["msg"]);
} ?>


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
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-4">
            <label class="form-label">ingrediants</label>
            <textarea name="msg" class="form-control" required></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-4" value="SUBMIT">
    </form>

    <!-- FOOTER SECTION -->
    <?php include "./footer.php"; ?>
    <!-- END FOOTER SECTION -->
</body>

</html>