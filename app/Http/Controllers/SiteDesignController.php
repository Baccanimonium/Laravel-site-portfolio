<?php

namespace App\Http\Controllers;

use App\Repositories\SiteServiceRepository;
use Illuminate\Http\Request;
use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\OurServiceRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;

class SiteDesignController extends SiteController
{
    protected $site_rep;


    public function __construct(SiteServiceRepository $siteServiceRepository, OurServiceRepository $ourServiceRepository)
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
        $this->site_rep = $siteServiceRepository;
        $this->os_rep = $ourServiceRepository;
    }

    public function index()
    {

        $ourServiceItems = $this->getPageInformation();
        $this->title = $ourServiceItems->title;
        $this->keywords = $ourServiceItems->keywords;
        $this->meta_description = $ourServiceItems->description;
        $siteServiceItems = $this->getSiteServiceItems();
        $content = view('site.siteSevices_content')->with('siteServiceItems', $siteServiceItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }
    public function getPageInformation()
    {
        $ourServices = $this->os_rep->one($this->current_url);
        return $ourServices;
    }

    public function getSiteServiceItems()
    {
        $siteServiceItems = $this->site_rep->get(['img','title','price','previewdesc','alias']);
        return $siteServiceItems;
    }

    public function show($razrabotka_saitov)
    {
        $siteServiceItem = $this->site_rep->one($razrabotka_saitov,['responses' =>true]);
                    if (isset($siteServiceItem->id)) {
            $this->title = $siteServiceItem->title;
            $this->keywords = $siteServiceItem->keywords;
            $this->meta_description = $siteServiceItem->description;
        }
        $content = view('site.site_service_content')->with('siteServiceItem',$siteServiceItem)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}
