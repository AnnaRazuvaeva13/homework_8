<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST["name"])) {
  $name = $_POST["name"];
  $_SESSION["name"] = $name;
}
header("Location: index.php");
