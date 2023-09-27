<?php

namespace Strategy;

class FileLogger implements Logger
{
    public function log()
    {
        var_dump("log the data to a file");
    }
}
