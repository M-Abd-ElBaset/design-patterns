<?php

use PHPUnit\Framework\TestCase;
use Specifications\Customer;
use Specifications\CustomerIsGold;

class CustomerIsGoldTest extends TestCase
{
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $specification = new CustomerIsGold;
        $goldCustomer = new Customer("gold");

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }
}
