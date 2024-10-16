<!DOCTYPE html>
<html lang=”uk”>
 <head>
  <title>Test</title>
  <meta charset="utf-8">
 </head>
 <body>
  <h1>Тестова сторінка. ЛР3</h1>
  <?php
    $days = ["Понедiлок", "Вiвторок", "Середа", "Четвер",
             "П'ятниця", "Субота", "Недiля"];
    echo "Поточна дата та час " . date('d.m.y H:i:s') . "<br>";
    for ($i = 1; $i <= 7; $i++) {
        if ((int)(date('N')) == $i) {
            echo "День тижня за номером - " . $i . ", за календарем - " . $days[$i - 1]; break;
        }
    }
  ?>
 </body>
</html>