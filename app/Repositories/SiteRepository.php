<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;
class SiteRepository extends Repository
{
    public function __construct(\App\Site $site)
    {
        $this->model = $site;
    }
}