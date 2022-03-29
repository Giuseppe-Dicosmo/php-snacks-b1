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
      'opsite' => 'Basket Roma',
      'punti_casa' => 45,
      'punti_opsite' => 21,
    ],
    [
      'casa' => 'Basket Barletta',
      'opsite' => 'Basket Foggia',
      'punti_casa' => 34,
      'punti_opsite' => 12,
    ],
    [
      'casa' => 'Basket Andria',
      'opsite' => 'Basket Trani',
      'punti_casa' => 58,
      'punti_opsite' => 51,
    ],
    [
      'casa' => 'Basket Bari',
      'opsite' => 'Basket Trinitapoli',
      'punti_casa' => 60,
      'punti_opsite' => 60,
    ],
  ];


  $lunghezza_partite = count($partite);
  var_dump($lunghezza_partite);

  for ($i = 0; $i < $lunghezza_partite; $i++) {
  ?>
    <li>
      <?php
      echo $partite[$i]['casa'];
      echo $partite[$i]['ospite'];
      echo $partite[$i]['punti_casa'];
      echo $partite[$i]['punti_opsite'];
      ?>
    </li>
  <?php
  }
  ?>
</body>

</html>

echo $partite[$i]['casa'];
echo $partite[$i]['ospite'];
echo $partite[$i]['punti_casa'];
echo $partite[$i]['punti_opsite'];