<?php
for ($i = 1; $i < 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $desc = 'ping pong';
    } else if ($i % 3 == 0) {
        $desc = 'ping';
    } else if ($i % 5 == 0) {
        $desc = 'pong';
    } else {
        $desc = 'dum';
    }
    echo "$i - $desc<br>";
}
?>
