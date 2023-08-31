<?php

function dd(...$dumps): void {
    echo '<pre>';
    foreach ($dumps as $dump) {
        var_dump($dump);
    }
    echo '</pre>';
    exit;
}