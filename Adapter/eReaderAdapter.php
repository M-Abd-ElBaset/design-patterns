<?php

namespace Adapter;

use Adapter\BookInterface;
use Adapter\eReaderInterface;

class eReaderAdapter implements BookInterface
{
    private eReaderInterface $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}
