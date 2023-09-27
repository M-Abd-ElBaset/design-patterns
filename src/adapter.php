<?php

namespace DesignPatterns;

require '../vendor/autoload.php';

use Adapter\Book;
use Adapter\BookInterface;
use Adapter\eReaderAdapter;
use Adapter\Kindle;
use Adapter\Nook;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new eReaderAdapter(new Nook));
