<?php

declare(strict_types=1);

if (! defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// TEST CONSTANTS
define('FIXTURES', __DIR__ . DS . 'fixtures');
define('PROCESSES_FOR_TESTS', 2); // We need exactly 2 to generate appropriate race conditions for complete coverage
define('TMP_DIR', __DIR__ . DS . 'tmp');
define('PARATEST_ROOT', dirname(__DIR__));
define('BOOTSTRAP', __DIR__ . DS . 'bootstrap.php');
