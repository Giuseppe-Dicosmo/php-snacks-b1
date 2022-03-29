<?php
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

$insegnanti = $db['teachers'];
// var_dump($insegnanti);

$alunni = $db['pm'];
// var_dump($alunni);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .container {
      font-size: 30px;
      width: 250px;
      height: 250px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .insegnanti {
      background-color: red;
    }

    .alunni {
      background-color: green;
    }
  </style>
</head>

<body>
  <ul class="container insegnanti">
    <h1>teachers</h1>
    <?php
    for ($i = 0; $i < count($insegnanti); $i++) {
    ?>
      <li style="color: White;"><?php echo $insegnanti[$i]['name'] . ' ' . $insegnanti[$i]['lastname']; ?></li>

    <?php
    }
    ?>
  </ul>

  <ul class="container alunni">
    <h1>pm</h1>
    <?php
    for ($i = 0; $i < count($alunni); $i++) {
    ?>
      <li style="color: White;"><?php echo $alunni[$i]['name'] . ' ' . $alunni[$i]['lastname']; ?></li>

    <?php
    }
    ?>
  </ul>
</body>

</html>