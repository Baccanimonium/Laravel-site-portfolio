<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;

class BlogController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
          }
    public function index()
    {



        $blog = $this->getBlogInformation();
        $content = view('site.blog_content')->with('blog',$blog )->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }


    public function getBlogInformation()
    {

        $blogInformation = $this->b_rep->get(['created_at','previewdesc','img','alias', 'title']);
        return $blogInformation;
    }

}
