<!DOCTYPE html>
<html>
<body>

<h1>PHP code</h1>

<?php
function basketball($point1, $point2) {
    $sum = ($point1 * 2) + ($point2 * 3);
    return $sum;
  }
  echo "The answer is " .basketball(13, 7);
?>

</body>
</html>