<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $partite = [
    [
      'casa' => 'Basket Milano',
      'ospite' => 'Basket Roma',
      'punti_casa' => 45,
      'punti_ospite' => 21,
    ],
    [
      'casa' => 'Basket Barletta',
      'ospite' => 'Basket Foggia',
      'punti_casa' => 34,
      'punti_ospite' => 12,
    ],
    [
      'casa' => 'Basket Andria',
      'ospite' => 'Basket Trani',
      'punti_casa' => 58,
      'punti_ospite' => 51,
    ],
    [
      'casa' => 'Basket Bari',
      'ospite' => 'Basket Trinitapoli',
      'punti_casa' => 60,
      'punti_ospite' => 60,
    ],
  ];


  $lunghezza_partite = count($partite);
  var_dump($lunghezza_partite);

  for ($i = 0; $i < $lunghezza_partite; $i++) {
  ?>
    <li>
      <?php
      echo $partite[$i]['casa'] . ' - ' . $partite[$i]['ospite'] . ' | ' . $partite[$i]['punti_casa'] . ' - ' . $partite[$i]['punti_ospite'];
      ?>
    </li>
  <?php
  }
  ?>
</body>

</html>