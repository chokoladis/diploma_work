<?php

namespace Main\Tools;

use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{

    private static array $loggers;
    private string $filePath;

    private function __construct(string $logFile)
    {
        $this->filePath = '/../logs/'.$logFile;
    }

    static function getInstance(string $logFile): LoggerInterface
    {
        if (!isset(self::$loggers[$logFile])) {
            self::$loggers[$logFile] = new Logger($logFile);
        }

        return self::$loggers[$logFile];
    }

    public function emergency(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement emergency() method.
    }

    public function alert(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement alert() method.
    }

    public function critical(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement critical() method.
    }

    public function error(\Stringable|string $message, array $context = []): void
    {
//        todo color ?
        file_put_contents($this->filePath, print_r(['message' => $message,'context' => $context]) . PHP_EOL, FILE_APPEND);
    }

    public function warning(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement warning() method.
    }

    public function notice(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement notice() method.
    }

    public function info(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement info() method.
    }

    public function debug(\Stringable|string $message, array $context = []): void
    {
        // TODO: Implement debug() method.
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        // TODO: Implement log() method.
    }
}