<?php

class Util{

  public static function hoje(){
      return date('dd/mm/YY');
  }

}

$util = new Util();
echo "<p>" . $util->hoje() . "</p>";
echo "<p>" . Util::hoje() . "</p>";

?>
