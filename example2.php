<?php

interface Logger
{
    public function log(LogMessage $message): void;
}

class SimpleLogger implements Logger
{
    public function log(LogMessage $message): void
    {
        var_dump('Log: ', $message->asString());
    }
}

class LogMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function asString(): string
    {
        return $this->message;
    }
}

class DatabaseConnectionFailedLogMessage extends LogMessage
{
    public function __construct()
    {
        parent::__construct('Could not connect to database');
    }
}

$logger = new SimpleLogger;
$logger->log(new DatabaseConnectionFailedLogMessage);
