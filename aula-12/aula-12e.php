<?php
echo @(10 / 0);
// suprimiu "Warning: Division by zero"
$c = @$_POST["nome"] . @$_POST["sobrenome"];
// suprimiu "Notice: Undefined index: nome"
// suprimiu "Notice: Undefined index: sobrenome"
@$newfunc = create_function('$a', 'return;');
// suprimiu "Deprecated: Function create_function() is deprecated"
@ $i / 0;
// suprimiu "Notice: Undefined variable: i"
// não suprimiu o "Warning: Division by zero"
$c = @funcaoNaoExiste(); //não suprimiu erro fatal
echo 'fim';