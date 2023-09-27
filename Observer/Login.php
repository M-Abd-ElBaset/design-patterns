<?php

namespace Observer;

use Exception;

class Login implements Subject
{
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) {

            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;
        return $this;
    }
    private function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer)
                throw new Exception();
            $this->observers[] = $observer;
        }
    }
    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function fire()
    {
        $this->notify();
    }
}
