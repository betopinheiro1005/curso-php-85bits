<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <body>
    <?php
      $_SESSION["usuario"] = "admin";
      $_SESSION["senha"] = "1234";
    ?>
  </body>
</html>
