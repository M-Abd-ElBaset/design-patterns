<?php

namespace Template;

class VeggieSub extends Sub
{
    protected function addPrimaryToppings()
    {
        var_dump("add veggies");
        return $this;
    }
}
