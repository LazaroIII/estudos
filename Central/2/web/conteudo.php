<?php

echo "<br><br><br><br><br><br>";
echo "<hr>" . print_r($_SERVER['REQUEST_URI'],1) . "</hr>";


//if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
//    return false;
//} else {
//    die($_SERVER['REQUEST_URI']);
//}

