<?php

namespace App\Http\Controllers;

use App\Repositories\MarketingServiceRepository;
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

class InternetMarketingController extends SiteController
{
    protected $mark_rep;


    public function __construct(MarketingServiceRepository $marketingServiceRepository, OurServiceRepository $ourServiceRepository)
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
        $this->mark_rep = $marketingServiceRepository;
        $this->os_rep = $ourServiceRepository;
    }

    public function index()
    {

        $ourServiceItems = $this->getPageInformation();
        $this->title = $ourServiceItems->title;
        $this->keywords = $ourServiceItems->keywords;
        $this->meta_description = $ourServiceItems->description;
        $marketingServiceItems = $this->getMarketingServiceItems();
        $content = view('site.internet_marketing_content')->with('marketingServiceItems', $marketingServiceItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }
    public function getPageInformation()
    {
        $ourServices = $this->os_rep->one($this->current_url);
        return $ourServices;
    }

    public function getMarketingServiceItems()
    {
        $marketingServiceItems = $this->mark_rep->get(['img','title','price','previewdesc','alias']);
        return $marketingServiceItems;
    }

    public function show($internet_marketing)
    {
        $internetMarketingItem = $this->mark_rep->one($internet_marketing,['calculator' =>true]);
                            if (isset($internetMarketingItem->id)) {
            $this->title = $internetMarketingItem->title;
            $this->keywords = $internetMarketingItem->keywords;
            $this->meta_description = $internetMarketingItem->description;
        }
        $content = view('site.inernet_marketing_item_content')->with('internetMarketingItem',$internetMarketingItem)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}
