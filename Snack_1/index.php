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
    $matches =[
      [
        "nome_squadra_1" => 'Olimpia Milano',
        "nome_squadra_2" => 'Cantù',
        "totale_punti_squadra_1" => rand(1,99),
        "totale_punti_squadra_2" => rand(1,99),
      ],
      [
        "nome_squadra_1" => 'Olimpia Milano',
        "nome_squadra_2" => 'Cantù',
        "totale_punti_squadra_1" => rand(1,99),
        "totale_punti_squadra_2" => rand(1,99),
      ],
      [
        "nome_squadra_1" => 'Olimpia Milano',
        "nome_squadra_2" => 'Cantù',
        "totale_punti_squadra_1" => rand(1,99),
        "totale_punti_squadra_2" => rand(1,99),
      ],
      [
        "nome_squadra_1" => 'Olimpia Milano',
        "nome_squadra_2" => 'Cantù',
        "totale_punti_squadra_1" => rand(1,99),
        "totale_punti_squadra_2" => rand(1,99),
      ]
    ];
    var_dump($matches);
  ?>

    <ul>

    <?php 
      foreach ($matches as $match){
    ?>
      <li><?php echo $match["nome_squadra_1"] ?> - <?php echo $match["nome_squadra_2"] ?> | <?php echo $match["totale_punti_squadra_1"] ?> - <?php echo $match["totale_punti_squadra_2"] ?></li>
    <?php }?>

    </ul>

</body>
</html>