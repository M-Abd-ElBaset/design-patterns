<?php


namespace Specifications;

use Illuminate\Database\Capsule\Manager as DB;

class CustomersRepository
{
    public function __construct()
    {
        $this->setUpDatabase();
        $this->migrateTables();
    }

    protected function setUpDatabase()
    {
        $database = new DB();
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);
        $database->bootEloquent();
        $database->setAsGlobal();
    }

    protected function migrateTables()
    {
        DB::schema()->create('customers', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name' => 'Joe', 'type' => 'gold']);
        Customer::create(['name' => 'Jane', 'type' => 'silver']);
    }

    public function all()
    {
        return Customer::all();
    }

    public function whoMatch(CustomerIsGold $spec)
    {
        $customers = $spec->asScope(Customer::query())->get();
        return $customers->filter(fn (Customer $customer) => $spec->isSatisfiedBy($customer));
    }
}
