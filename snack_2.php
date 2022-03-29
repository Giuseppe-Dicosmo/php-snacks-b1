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
  $user_name = $_GET['name'];

  var_dump($user_name);

  $user_email = $_GET['mail'];
  $verifica_email_punto = strpos($user_email, '.', -4);
  $verifica_email_chiocciola = strpos($user_email, '@');

  var_dump($user_email);
  var_dump($verifica_email_punto);
  var_dump($verifica_email_chiocciola);

  $user_age = $_GET['age'];
  var_dump($user_age);

  if (strlen($user_name) >= 3 && $verifica_email_punto && $verifica_email_chiocciola && is_numeric($user_age)) {
  ?>
    <h1>Accesso riuscito</h1>
  <?php
  } else {
  ?>
    <h1>Accesso negato</h1>
  <?php
  }
  ?>
</body>

</html>