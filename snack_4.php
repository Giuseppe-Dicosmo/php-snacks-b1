<?php
$arry = [];

while (count($arry) < 15) {
  $numeri = rand(1, 100);

  if (!in_array($numeri, $arry)) {
    array_push($arry, $numeri);
  }
}

var_dump($arry);
