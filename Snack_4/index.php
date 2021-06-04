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
      $array_numeri = [];
      $numero_temp = 0;
      $counter = 0;
      while(count($array_numeri)<15){
        $numero_temp = rand(0, 100)
        if(!in_array($array_numeri, $numero_temp)){
          $array_numeri[$counter] = $numero_temp;
          $counter = $counter +1;
        }
      }
      var_dump($array_numeri)
    ?>
</body>
</html>