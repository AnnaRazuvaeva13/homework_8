<?php
if (empty($_SESSION["name"])) {
  include 'form.html'; 
}
else {
  echo "Добро пожаловать, " . $_SESSION["name"] . "! <br>";
  echo "<a href='exit.php'> Очистить переменную сессии </a>";
}

