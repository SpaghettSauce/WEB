<?php
header('Content-type: text/plain');//из-за того что код в браузере html, "\n" воспринимается как пустое место, поэтому использую такой work around

//1.1

$str = 'ahb acb aeb aeeb adcb axeb';
echo("$str \n");
echo preg_replace('#a.b#','',$str);
echo (" <--строки начинающиеся на а и заканчивающиеся на b с двумя символами между ними \n\n");

//1.2
