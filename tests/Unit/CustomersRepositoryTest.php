<?php

use Specifications\Customer;
use Specifications\CustomerIsGold;
use Specifications\CustomersRepository;



test('fetch all customers', function () {
    $customersRepo = new CustomersRepository;
    $customers = $customersRepo->all();
    expect($customers)->toHaveCount(2);
});

test('fetch customers that meets a specification', function () {
    $customersRepo = new CustomersRepository;

    $result = $customersRepo->whoMatch(new CustomerIsGold);
    expect($result)->toHaveCount(1);
});
