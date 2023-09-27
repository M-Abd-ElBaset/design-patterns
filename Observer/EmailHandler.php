<?php

namespace Observer;

class EmailHandler implements Observer
{
    public function handle()
    {
        var_dump('fire off an email');
    }
}
