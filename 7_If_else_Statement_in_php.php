<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

/* If condition is true then if-block executed and if not then else-block is executed
 *
 * <?php
 *
 *  if(false){
 *     echo 'If Block Executed';
 *  }
 *  else{
 *      echo 'Else Bock Executed since condition was false';
 *  }
 * ?>
 */

  <?php
    // Declare the $age variable below
    $age = 19; // assign randomly say, my age
    
    if($age >= 30){
      echo 'You are 30 years old or more.';
    }
    else{
      echo 'You are under 30 years old.';
    }
    
  ?>

</body>
</html>
