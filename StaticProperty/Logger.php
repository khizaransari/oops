<?php


class Logger
{
    public static $logLevel = 'debug';

    public static function log($message, $level = 'info')
    {
        if ($level === self::$logLevel) {
            echo "[{$level}] {$message}" . PHP_EOL;
        }
    }
}

Logger::log('This is an informational message', 'info');
Logger::log('This is a debug message', 'debug');
