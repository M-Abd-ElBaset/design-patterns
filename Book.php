<?php

namespace Acme;

class Book implements BookInterface
{
    public function read()
    {
        var_dump("reading a book");
    }

    public function turnPage()
    {
        var_dump("turning book page");
    }
}
