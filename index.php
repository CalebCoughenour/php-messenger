<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8" />
  <title>Mock title</title>
  <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

<?php
  $dayofweek = date("w");

  switch ($dayofweek) {
    case 0:
      echo "It is Sunday!";
      break;
    case 1:
      echo "It is Monday!";
      break;
    case 2:
      echo "It is Tuesday!";
      break;
    case 3:
      echo "It is Wednesday!";
    case 4:
      echo "It is Thursday!";
      break;
    case 5:
      echo "<p>It is Friday!</p>";
      break;
    case 6:
      echo "It is Saturday!";
      break;  
  }
?>

</body>
</html>