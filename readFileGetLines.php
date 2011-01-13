<?php

$file = fopen($argv[1], 'r');
if ($file) {
    while (!feof($file)) {
        $line = fgets($file);
        print ($line);
    }
}
fclose($file);

?>
