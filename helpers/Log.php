<?php

//include_once('functions.php');

class Log
{
    private $error;
    private $errorCode;
    private $file;
    private $line;
    private $trace = [];

    const LOG_TEXT = 'test';

    function __construct(Throwable $e)
    {
        $this->error = $e->getMessage();
        $this->errorCode = $e->getCode();
        $this->file = $e->getFile();
        $this->line = $e->getLine();
        $this->trace = $e->getTraceAsString();

        $this->save();
    }

    private function save()
    {
        date_default_timezone_set('UTC+5');

        $logFile = fopen('logs/app.log', 'a');

        $logDate = date('d.m.Y H:i:s');


        $logText = $logDate . '\n'
            . 'File: ' . $this->file  . '\n'
            . 'Line: ' . $this->line . '\n'
            . 'Error Code: ' . $this->errorCode . '\n'
            . 'Error: ' . $this->error . '\n'
            . 'Trace: ' . $this->trace . '\n';

        if (flock($logFile, LOCK_EX)) {
            fputs($logFile, $logText);
            flock($logFile, LOCK_UN);
        }

        fclose($logFile);
    }







    // echo $a->getMessage();
    // echo '<br>';
    // echo $a->getCode();
    // echo '<br>';
    // echo $a->getFile();
    // echo '<br>';
    // echo $a->getLine();
    // echo '<br>';
    // echo '<pre>';
    // print_r($a->getTrace());
    // echo '</pre>';
    // echo '<br>';
    // echo $a->getTraceAsString();


}
