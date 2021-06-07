<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
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

  foreach($db as $key => $users){
    foreach($users as $user){
      if($key == 'teachers'){
  ?>
    <div class="teacher">
        <p> <?php echo $user["name"] ?>  </p>
        <p> <?php echo $user["lastname"] ?>  </p>
    </div>
  <?php 
    } elseif($key == 'pm'){

  ?>
    <div class="pm">
        <p> <?php echo $user["name"] ?>  </p>
        <p> <?php echo $user["lastname"] ?>  </p>
    </div>
  <?php 
  }}}
  ?>
</body>
</html>