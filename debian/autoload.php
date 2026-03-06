<?php

// Debian autoloader for phplucidframe/console-table
spl_autoload_register(function ($class) {
    $prefix = 'LucidFrame\\';
    $baseDir = '/usr/share/php/LucidFrame/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
