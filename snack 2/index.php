<?php


if ((!empty($_GET["name"]) && !empty($_GET["mail"])) && !empty($_GET["age"])) {
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $message = "";

  $check_name = false;
  if ((strlen($name) > 3)) {
    $check_name = true;
  }

  $check_mail = false;
  if ((strpos($mail, ".") !== false) && (strpos($mail, "@") !== false)) {
    $check_mail = true;
  }

  $check_age = false;
  if (is_numeric($age)) {
    $check_age = true;
  }

  if (($check_name && $check_mail) && $check_age) {
    $message = "Access Granted";
  } else {
    $message = "Access Negated";
  }


} else {
  echo "Hai dimenticato ad inserire qualche parametro";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php snacks</title>
  </head>
  <body>

    <h1>
      <?php echo $message; ?>
    </h1>

  </body>
</html>
