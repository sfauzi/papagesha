<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Try to preload the SSL library if possible
if (!extension_loaded('openssl')) {
    @dl('openssl.so');
}

require __DIR__ . '/../public/index.php';