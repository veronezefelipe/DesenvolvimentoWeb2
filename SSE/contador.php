<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function getVisitsCount() {
    $file = 'visits.txt';
    if (file_exists($file)) {
        return intval(file_get_contents($file));
    } else {
        return 0;
    }
}

function incrementVisitsCount() {
    $file = 'visits.txt';
    $count = getVisitsCount() + 1;
    file_put_contents($file, $count);
}

incrementVisitsCount();

echo "Acessos: " . getVisitsCount() . "\n\n";

?>