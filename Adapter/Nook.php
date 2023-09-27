<?php

namespace Adapter;

class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump("turning on the nook");
    }

    public function pressNextButton()
    {
        var_dump("pressing the next button on the nook");
    }
}
