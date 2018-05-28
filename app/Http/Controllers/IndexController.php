<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\OurServiceRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends SiteController
{
    public function __construct(OurServiceRepository $ourServiceRepository)
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
        $this->os_rep = $ourServiceRepository;
        }
    public function index()
    {
        $ourServiceItems = $this->getOurServiceItems();
        $content = view('site.index_content')->with('ourServiceItems',$ourServiceItems )->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }

    public function getOurServiceItems()
    {
        $ourServices = $this->os_rep->get(['name','img','previewdesc','alias']);
        return $ourServices;
    }
}
