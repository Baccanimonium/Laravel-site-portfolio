<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:51
 */
namespace App\Repositories;
class OptionsRepository extends Repository
{
    public function __construct(\App\Options $options)
    {
        $this->model = $options;
    }
}