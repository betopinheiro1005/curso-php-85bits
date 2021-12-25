<?php

  $conhecimentos = ["PHP", "Javascript", "HTML-5", "Angular", "Node.js", "MongoDB"];

  function hastag($x){
    return "# " . $x;
  }

  echo "<pre>";
  print_r(array_map('hastag', $conhecimentos));
  echo "</pre>";
  
?>
