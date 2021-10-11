<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static Template</title>
  </head>
  <body>
  <form action="index.php" method="POST">
<input type="number" name="array[]" value="1">
<input type="number" name="array[]" value="2">
<input type="number" name="array[]" value="3"> <!--taking array input by input name array[]-->
<input type="number" name="array[]" value="4">
<input type="submit" name="submit">
</form>

      <?php
      $a=$_POST['array'];
      echo "Input :" .$a[2];  
      foreach ($a as $v) {
          print_r($v); 
      }
      ?>
      
    <h1>This is a static template, there is no bundler or bundling involved!</h1>
  </body>
</html>