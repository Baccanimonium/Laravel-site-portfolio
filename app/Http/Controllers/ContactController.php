<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\MenuRepository;

use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
    }

    public function index(Request $request)
    {
        if($request->isMethod('post')) {
            $result = $this->send();


            if($result) {
                return redirect()->route('contacti')->with('status', 'Email is send');
            }

        }
        $siteInformation = $this->getSiteInformation();
        $content = view('site.contact_content')->with('siteInformation',$siteInformation)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    protected function send()
    {
        $mail_admin = Config::get('settings.mail_admin');
        Mail::to($mail_admin,'Mr. Admin')->send(new ContactMail);
        return true;
    }

}
