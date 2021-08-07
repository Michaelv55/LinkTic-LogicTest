<?php

include './LogicTest.php';

echo LogicTest::sumOfMultiples(10, 3,5); // 23

echo PHP_EOL;

echo LogicTest::toUpperCamelCase('Bienvenido a_Trabajo-remoto'); //BienvenidoATrabajoRemoto
echo PHP_EOL;
echo LogicTest::toUpperCamelCase('bienvenido-a_ Trabajo remoto'); //BienvenidoATrabajoRemoto