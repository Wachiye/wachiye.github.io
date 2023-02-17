<?php
$baseDir = __DIR__ . DIRECTORY_SEPARATOR;
$includeDir = $baseDir . "/includes";

if (!defined('BASE_DIR')) {
    define('BASE_DIR', $baseDir);
}

if (!defined('INC_DIR')) {
    define('INC_DIR', $includeDir);
}
