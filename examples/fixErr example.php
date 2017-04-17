<?php

$foo = 5;

if ($foo = 10) {
    echo $foo;
    assert($foo === 5);
}

?>