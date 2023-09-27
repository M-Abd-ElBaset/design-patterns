<?php

namespace Adapter;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump("turning on the kindle");
    }

    public function pressNextButton()
    {
        var_dump("pressing the next button on the kindle");
    }
}
