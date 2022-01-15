<?php

namespace App\Services;

use App\Models\Customer;
use App\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepo;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getCustomers($customerFilter)
    {
        return Customer::filter($customerFilter)->paginate(Customer::LIMIT_PER_PAGE)->appends(request()->query());
    }
}
