<?php

use Specifications\Customer;
use Specifications\CustomerIsGold;

test('a customer is not gold', function () {
    $goldCustomer = new Customer(['type' => 'silver']);
    $specification = new CustomerIsGold;
    expect($specification->isSatisfiedBy($goldCustomer))->toBeFalse();
});
