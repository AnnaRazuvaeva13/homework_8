<?php
if (empty($_SESSION["name"])) {
  include 'form1.html'; 
}
if (!empty($_SESSION["name"])) {
  echo "Добро пожаловать, " . $_SESSION["name"] . "! <br>";
  echo "<a href='exit.php'> Очистить переменную сессии </a>";
}
