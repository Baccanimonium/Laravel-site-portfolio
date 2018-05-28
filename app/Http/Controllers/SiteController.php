<?php

namespace App\Http\Controllers;

use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Menu;
use Illuminate\Support\Facades\Config;


class SiteController extends Controller
{
    protected $template;
    protected $vars = array();
    protected $m_rep;
    protected $p_rep;
    protected $b_rep;
    protected $s_rep;
    protected $pf_rep;
    protected $os_rep;
    protected $title;
    protected $keywords;
    protected $meta_description;

    protected $current_url;


    public function __construct(MenuRepository $menuRepository,BlogRepository $blogRepository,SiteRepository $siteRepository, PagesRepository $pagesRepository){
        $this->m_rep = $menuRepository;
        $this->b_rep = $blogRepository;
        $this->s_rep = $siteRepository;
        $this->p_rep = $pagesRepository;
        $this->template = 'site.index';
        $this->current_url = \request()->path();

    }
    protected function renderOutput()
    {
        $siteInformation= $this->getSiteInformation();
        $this->vars = array_add($this->vars, 'siteInformation', $siteInformation);

        $menu = $this->getMenu();
        $navigation = view('site.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        $blog = $this->getBlogInformation();
        $footer = view('site.footer')->with(['blog'=>$blog,'siteInformation'=>$siteInformation])->render();
        $this->vars = array_add($this->vars, 'footer', $footer);

        $pageInformation = $this->getPageInformation();
        if (isset($pageInformation->id)) {
            $this->title = $pageInformation->title;
            $this->meta_description = $pageInformation->description;
            $this->keywords = $pageInformation->keywords;
        }
        $this->vars = array_add($this->vars, 'keywords', $this->keywords);
        $this->vars = array_add($this->vars, 'meta_description', $this->meta_description);
        $this->vars = array_add($this->vars, 'title', $this->title);
        return view($this->template)->with($this->vars);
    }

    public function getMenu()
    {
        $menu = $this->m_rep->get(['path','title','id','parent',]);
        $mBuilder = Menu::make('MyNav', function ($m) use($menu){
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title,$item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }}
            }

        });
        return $mBuilder;
    }
    protected function getBlogInformation()
    {
        $blog = $this->b_rep->get(['previewdesc','img','alias'],Config::get('settings.home_blog_count'));

        return $blog;
    }
    protected function getSiteInformation()
    {
        $siteInformation = $this->s_rep->get(['phone','address','img','skype']);
        return $siteInformation;
    }

    protected function getPageInformation()
    {
        $pageInformation = $this->p_rep->one($this->current_url);
        return $pageInformation;
    }

}
