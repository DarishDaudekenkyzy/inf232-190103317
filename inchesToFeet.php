<!DOCTYPE html>
<html>
<body>

<h1>PHP code</h1>

<?php
function inches_to_feet($inches) {
    if ($inches >= 12){
          return $inches / 12;
      } 
    else {
          return 0;
      }
  }
  echo "The answer is " .inches_to_feet(324);
?>

</body>
</html>