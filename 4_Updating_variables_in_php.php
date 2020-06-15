<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<!-- Modifying values of php variables -->

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- Update and output the $x variable below -->
  <?php
    $x += 10;
    echo $x;
  ?>

  <br>

  <!-- Update and output the $y variable below -->
  <?php
    $y /= 5;
    echo $y;
  ?>

  <br>

  <!-- Update and output the $a variable below -->
  <?php
    $a++;
    echo $a;
  ?>

  <br>
  
  <!-- Update and output the $b variable below -->
  <?php
    $b--;
    echo $b;
  ?>

</body>
</html>
