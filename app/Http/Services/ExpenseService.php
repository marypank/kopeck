<?php

namespace App\Http\Services;

use App\Repositories\ExpenseRepository;

class ExpenseService extends BaseService
{
    public function __construct(public ExpenseRepository $expenseRepository)
    {
        parent::__construct($expenseRepository);
    }
}