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
    $media= 0;
    $students = [
      [
        "nome" => "Giuseppe",
        "cognome" => "Verdi",
        "voti" => [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)]
      ],
      [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)]
      ],
      [
        "nome" => "Giorgio",
        "cognome" => "Vanni",
        "voti" => [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)]
      ],
      [
        "nome" => "Cristina",
        "cognome" => "D'Avena",
        "voti" => [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)]
      ],
      [
        "nome" => "Ugo",
        "cognome" => "DeUghi",
        "voti" => [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)]
      ]
      ];

    foreach($students as $student){
      $media =number_format(array_sum($student["voti"])/count($student["voti"]),2,",",".") ;
  ?>
    <h1><?php echo $student["nome"] ?> <?php echo $student["cognome"] ?></h1>
    <h3>Media voti: <?php echo $media ?></h3>
  <?php } ?>
</body>
</html>