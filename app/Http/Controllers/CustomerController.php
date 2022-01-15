<?php

namespace App\Http\Controllers;

use App\Http\Filters\CustomerFilter;
use App\Services\CountryService;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(CustomerFilter $customerFilter)
    {
        $countries = app(CountryService::class)->pluckFields('id', 'name');

        $customers = $this->customerService->getCustomers($customerFilter);

        return view('customers', compact('customers', 'countries'));
    }
}
