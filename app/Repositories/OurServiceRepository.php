<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;

use App\OurService;

class OurServiceRepository extends Repository
{
    public function __construct(OurService $ourService)
    {
        $this->model = $ourService;
    }
}