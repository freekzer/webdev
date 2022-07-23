<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{

    protected $safeParms = [

        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
        
    ];

    protected $columnMap = [

        'name' => 'name',
        'type' => 'type',
        'email' => 'email',
        'address' => 'address',
        'city' => 'city',
        'state' => 'state',
        'postalCode' => 'postal_code'

    ];

    protected $operatorMap = [

        'eq' => '=',
        'lt' => '<', 
        'gt' => '>',
        'lte' => '<=', 
        'gte' => '>=',
        'ne' => '!='

    ]; 
   
}