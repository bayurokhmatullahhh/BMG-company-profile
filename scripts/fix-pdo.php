<?php

if (PHP_VERSION_ID < 80500) {
    return;
}

$file = __DIR__.'/../vendor/laravel/framework/config/database.php';

if (! file_exists($file)) {
    return;
}

$content = file_get_contents($file);

if (str_contains($content, 'PDO::MYSQL_ATTR_SSL_CA')) {
    file_put_contents(
        $file,
        str_replace(
            'PDO::MYSQL_ATTR_SSL_CA',
            '(PHP_VERSION_ID >= 80500 ? Pdo\\Mysql::ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA)',
            $content
        )
    );
}
