<!DOCTYPE html>
<html>
<body>

<?php
    function letters($word) {
    for($i = 1; $i < strlen($word)-1; $i++) {
        if ($word[$i] == " ") 
            return true;
    }
        return false;
}

    echo "answer is " .letters('goto hell');
?>

</body>
</html>