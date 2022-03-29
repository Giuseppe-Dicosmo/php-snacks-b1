<?php

$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, omnis rerum! Facilis odio. inventore nam ea porro perferendis. esse maiores labore error ipsa. Ex distinctio consectetur. officia corporis beatae. Blanditiis.";

$arry_testo = explode(". ", $testo);

// var_dump($arry_testo);

for ($i=0; $i < count($arry_testo); $i++) {
  echo "<h1>$arry_testo[$i]</h1>";
}
?>