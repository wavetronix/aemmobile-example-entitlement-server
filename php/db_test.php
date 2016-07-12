<?php
require_once "settings.php";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name) or die("Unable to connect to database.");

// check connection
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}

// check if server is alive
if ($mysqli->ping()) {
  printf("Our connection is OK!\n");
} else {
  printf("Error: %s\n", $mysqli->error);
}

// close connection
$mysqli->close();
?>
