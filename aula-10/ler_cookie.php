<!DOCTYPE html>

<html>

  <body>

    <?php
      if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie (" . $cookie_name . ") sem valor";
      } else {
        echo "Cookie '" . $cookie_name . "' com valor!<br>";
        echo "valor atual é: " . $_COOKIE[$cookie_name];
      }
      ?>
    </body>
</html>
