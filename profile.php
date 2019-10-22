<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Tukur Mala</p>'; ?> 
<?php

$image = 'https://pbs.twimg.com/profile_images/1121058639429521409/U1JfVTJ9.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>
 </body>
</html>