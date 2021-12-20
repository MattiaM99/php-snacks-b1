<?php

$numbers = [];


while (count($numbers) < 15) {
  $num = rand(1,100);
  if (!in_array($num,$numbers)) {
    $numbers[] = $num;
  }
}
print_r($numbers);
var_dump($numbers)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>