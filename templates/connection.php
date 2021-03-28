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

?>