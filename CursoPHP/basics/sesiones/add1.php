<?php
session_start();

if ($_SESSION) {
  # code...
  $_SESSION['count']++;
  echo "Added +1";
}else {
  echo "There is not session count";
}

 ?>
