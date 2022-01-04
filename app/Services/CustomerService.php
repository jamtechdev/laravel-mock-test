<?php

namespace App\Services;


use App\Repositories\CustomerRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DataTables;

class CustomerService
{
    protected $customerRepository,$emailService;

    public function __construct(CustomerRepository $customerRepository, EmailService $emailService)
    {
        $this->customerRepository = $customerRepository;
        $this->emailService = $emailService;
    }

    public function create($data)
    {
        $customer = $this->customerRepository->create($data);
        $this->emailService->WelcomeNewCustomer($customer);
        return $customer;
    }
}
