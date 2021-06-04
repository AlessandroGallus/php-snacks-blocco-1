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
    $posts =[
      "01-01-2007" => [
      "title" => "post1",
      "author" => "autore 1",
      "text" => "testo post 1"
      ],
      "02-01-2007" => [
      "title" => "post2",
      "author" => "autore2",
      "text" => "testo post2"
      ],
      "03-01-2007" =>  [
      "title" => "post3",
      "author" => "autore3",
      "text" => "testo post3"
      ],
      "04-01-2007" => [
      "title" => "post4",
      "author" => "autore 4",
      "text" => "testo post 4"
      ]
    ];

    foreach ($posts as $key => $post ){
    ?>
      <h5><?php echo $key?></h5>
      <h1><?php echo $post["title"]?></h1>
      <h2><?php echo $post["author"]?></h2>
      <p><?php echo $post["text"]?></p>
    <?php }?>



</body>
</html>