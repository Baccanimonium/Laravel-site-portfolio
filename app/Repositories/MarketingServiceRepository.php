<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;
use App\MarketingService;


class MarketingServiceRepository extends Repository
{
    public function __construct(MarketingService $marketingService)
    {
        $this->model = $marketingService;
    }
    public function one($alias, $attr = array())
    {
        $marketingService= parent::one($alias, $attr);
        if ($marketingService && !empty($attr)) {
            $marketingService->load('calculator');
            if ($marketingService->calculator) {
            $marketingService->calculator->load('options');

            $marketingService->calculator->options->load('price');
            }
        }
        return $marketingService;
    }
}