<?php

require '../vendor/autoload.php';

class HomeStatus
{
    public $locked = true;
    public $lightsOff = true;
    public $alarmOn = true;
}

abstract class HomeChecker
{
    protected HomeChecker $successor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if (isset($this->successor)) {
            $this->successor->check($home);
        }
    }
}

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception("Lights are not off; Abort!");
        }

        $this->next($home);
    }
}

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new Exception("The doors are not locked; Abort!");
        }

        $this->next($home);
    }
}

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new Exception("The alarm is not on; Abort!");
        }

        $this->next($home);
    }
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);
