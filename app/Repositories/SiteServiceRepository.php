<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;
use App\SiteService;

class SiteServiceRepository extends Repository
{
    public function __construct(SiteService $siteService)
    {
        $this->model = $siteService;
    }
    public function one($alias, $attr = array())
    {
        $siteService= parent::one($alias, $attr);
        if ($siteService && !empty($attr)) {
            $siteService->load('responses','portfolios');

        }
        return $siteService;
    }
}