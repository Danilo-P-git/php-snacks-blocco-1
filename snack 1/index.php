<?php
  $matches = [
    [
    "squadra di casa" => "Virtus Bologna",
    "squadra ospite" => "Cremona",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Fortitudo Bologna",
    "squadra ospite" => "Trento",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Napoli",
    "squadra ospite" => "Bologna",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Trieste",
    "squadra ospite" => "Olimpia Milano",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Venezia",
    "squadra ospite" => "Pesaro",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Reggiana",
    "squadra ospite" => "Brindisi",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],
  [
    "squadra di casa" => "Catania",
    "squadra ospite" => "Palermo",
    "punti squadra di casa" => rand(50, 120),
    "punti squadra ospite" => rand(50, 120)
  ],

];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Calendario partite</h1>
    <ul class="incontri">
      <?php
      for ($i=0; $i <count($matches) ; $i++) {
        $numeroIncontro = $matches[$i];
        echo "<li>" . $numeroIncontro["squadra di casa"] . " - " . $numeroIncontro["squadra ospite"] . " | " . $numeroIncontro["punti squadra di casa"] . " - " . $numeroIncontro["punti squadra ospite"] . "</li>";


      }
       ?>
    </ul>


  </body>
</html>
