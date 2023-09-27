<?php

namespace Observer;

class LoginReporter implements Observer
{
    public function handle()
    {
        var_dump('do some form of reporting');
    }
}
