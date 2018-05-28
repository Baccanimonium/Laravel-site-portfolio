<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */

    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        \App\Blog::class => 'App\Http\Sections\Blog',
        \App\Calculator::class => 'App\Http\Sections\Calculators',
        \App\MarketingService::class => 'App\Http\Sections\MarketingServices',
        \App\Menu::class => 'App\Http\Sections\Menus',
        \App\Options::class=> 'App\Http\Sections\Options',
        \App\OurService::class=> 'App\Http\Sections\OurServices',
        \App\Page::class=> 'App\Http\Sections\Pages',
        \App\Portfolio::class=> 'App\Http\Sections\Portfolios',
        \App\Price::class=> 'App\Http\Sections\Prices',
        \App\Response::class=> 'App\Http\Sections\Responses',
        \App\Site::class=> 'App\Http\Sections\Site',
        \App\SiteService::class=> 'App\Http\Sections\SiteServices',
        \App\User::class=> 'App\Http\Sections\Users',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//
        parent::boot($admin);
    }
}
