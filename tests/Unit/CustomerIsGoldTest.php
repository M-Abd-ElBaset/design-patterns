<?php

use Specifications\Customer;
use Specifications\CustomerIsGold;

test('a customer is gold', function () {
    $goldCustomer = new Customer(['type' => 'gold']);
    $specification = new CustomerIsGold;
    expect($specification->isSatisfiedBy($goldCustomer))->toBeTrue();
});
