<!DOCTYPE html>
<html>
<body>

<h1>PHP code</h1>

<?php
function basketball($point1, $point2) {
    $sum = ($point1 * 2) + ($point2 * 3);
    return $sum;
  }
  echo "The answer is " .basketball(7, 5);
?>

</body>
</html>