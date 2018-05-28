<?php

namespace App\Http\Controllers;

use App\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;
use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;
use Illuminate\Routing\Route;

class PortfoliosController extends SiteController
{
    public function __construct(PortfoliosRepository $portfoliosRepository)
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
        $this->pf_rep = $portfoliosRepository;
    }
    public function index()
    {
        $portfoliosItems = $this->getPortfoliosItems();
        $content = view('site.portfolios_content')->with('portfoliosItems',$portfoliosItems )->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }

    public function getPortfoliosItems()
    {
        $portfoliosItems = $this->pf_rep->get(['name','alias','img','previewdesc']);
        return $portfoliosItems;
    }
}
