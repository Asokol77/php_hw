<?php
// $type;
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
$variable = [];
if (is_bool($variable)) {
      $type = 'bool';
} elseif (is_float($variable)) {
      $type = 'float';
} elseif (is_int($variable)) {
      $type = 'integer';
} elseif (is_string($variable)) {
      $type = 'string';
} elseif (is_null($variable)) {
      $type = 'null';
} elseif (is_array($variable)) {
    $type = 'array';
}
echo "type is $type".PHP_EOL;
$variable = 'piu';
switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'str';
        break;
    case is_null($variable):
            $type = 'null';
        break;
    case is_array($variable):
            $type = 'array';
        break;
}
echo "type2 is $type";
?>
