<?php

namespace Template;

class TurkeySub extends Sub
{
    protected function addPrimaryToppings()
    {
        var_dump("add turkey");
        return $this;
    }
}
