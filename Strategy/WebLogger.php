<?php

namespace Strategy;

class WebLogger implements Logger
{
    public function log()
    {
        var_dump("log the data to a Saas site");
    }
}
