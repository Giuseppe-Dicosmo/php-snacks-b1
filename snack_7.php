<?php
$alunni = [
  [
    'name' => 'Michele',
    'lastname' => 'Papagni',
    'vot' => [5, 4, 4, 6],
  ],
  [
    'name' => 'Giuseppe',
    'lastname' => 'Dicosmo',
    'vot' => [5, 4, 8, 6]
  ],
  [
    'name' => 'Matteo',
    'lastname' => 'Pelusi',
    'vot' => [6, 4, 7, 6]
  ],
  [
    'name' => 'Giovanni ',
    'lastname' => 'Nicolosi',
    'vot' => [8, 4, 7, 6]
  ],
  [
    'name' => 'Michelangelo ',
    'lastname' => 'Morosi',
    'vot' => [5, 4, 7, 9]
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php
    for ($i = 0; $i < count($alunni); $i++) {
      $media = count($alunni[$i]['vot']);
      $sum_media = array_sum($alunni[$i]['vot']);
      $somma = $sum_media / $media;
    ?>

      <li><?php echo $alunni[$i]['name'] . ' ' . $alunni[$i]['lastname'] . ' ' . $round_vot = round($somma); ?></li>

    <?php
    }
    ?>
  </ul>
</body>

</html>