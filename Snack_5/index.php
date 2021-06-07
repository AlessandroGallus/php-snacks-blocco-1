<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quo cumque odio facere? Inventore fuga ducimus veniam? Nesciunt alias iure magnam. Neque quod accusantium est minus accusamus cumque iusto harum quas adipisci. Debitis illum blanditiis voluptatum alias, ducimus nostrum veritatis!";

    echo $str;
    ?>
  </h3>
  
    <?php
    $array_str = (explode(".", $str )) ;

    foreach ($array_str as $string){
      if(!empty($string)){
  ?>
  <p><?php echo $string ?>.</p>
  <?php }} ?>
</body>
</html>