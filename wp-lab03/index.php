<!DOCTYPE html>
<html>
 <head>
  <title>Test</title>
  <meta charset="utf-8">
 </head>
 <body>
  <h1>Тестова сторінка. ЛР3</h1>
  <?php
  $arNumbers = array(1,2,3,4,5,6,7,8,9);
  ?>
  <table>
   <thead>
    <tr>
     <th>col 1</th>
     <th>col 2</th>
     <th>col 3</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td><?=$arNumbers[0]?></td>
     <td><?=$arNumbers[1]?></td>
     <td><?=$arNumbers[2]?></td>
    </tr>
    <tr>
     <td><?=$arNumbers[3]?></td>
     <td><?=$arNumbers[4]?></td>
     <td><?=$arNumbers[5]?></td>
    </tr>
    <tr>
     <td><?=$arNumbers[6]?></td>
     <td><?=$arNumbers[7]?></td>
     <td><?=$arNumbers[8]?></td>
    </tr>
   </tbody>
  </table>
  <time>
   <?=date("Y-m-d H:i:s")?>
  </time>
 </body>
</html>