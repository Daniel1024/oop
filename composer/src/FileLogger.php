<?php 

namespace Daniel;

class FileLogger implements Logger
{
    public function info($message)
    {
        //exit(__DIR__);
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND
        );

    }
}
