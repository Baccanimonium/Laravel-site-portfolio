<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;
class CalculatorRepository extends Repository
{
    public function __construct(\App\Calculator $calculator)
    {
        $this->model = $calculator;
    }
}