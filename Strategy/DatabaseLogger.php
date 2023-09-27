<?php

namespace Strategy;

class DatabaseLogger implements Logger
{
    public function log()
    {
        var_dump("log the data to the database");
    }
}
