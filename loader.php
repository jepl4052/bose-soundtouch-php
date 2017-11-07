<?php

//load all source files from src/

requireAll('src');

function requireAll($dir) {
    $f = scandir($dir);
    foreach ($f as $f2) {
        if ($f2 == "." || $f2 == "..") continue;
        if (is_dir($dir . DIRECTORY_SEPARATOR . $f2)) {
            requireAll($dir . DIRECTORY_SEPARATOR . $f2);
        } else {
            if (substr($f2, -4) == ".php") {
                require_once($dir . DIRECTORY_SEPARATOR . $f2);
            }
        }
    }
}

?>
