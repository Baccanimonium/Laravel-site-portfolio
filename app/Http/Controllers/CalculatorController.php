<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Menu;
use App\Page;
use App\Repositories\BlogRepository;
use App\Repositories\CalculatorRepository;
use App\Repositories\MenuRepository;
use App\Repositories\OptionsRepository;
use App\Repositories\PagesRepository;
use App\Repositories\SiteRepository;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CalculatorController extends SiteController
{
    protected $calc_rep;
    public function __construct(CalculatorRepository $calculatorRepository)
    {
        parent::__construct(new MenuRepository(new Menu()), new BlogRepository(new Blog()), new SiteRepository(new Site()), new PagesRepository(new Page()));
        $this->calc_rep = $calculatorRepository;
        }
    public function index()
    {
        $calculatorItems = $this->getCalculatorItems();
        $content = view('site.calculator_content')->with('calculatorItems',$calculatorItems )->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }

    public function getCalculatorItems()
    {
        $calculatorsItem = $this->calc_rep->get();
        if ($calculatorsItem) {
            $calculatorsItem->load('options');
            foreach ($calculatorsItem as $item) {
                $item->options->load('price');
            }
        }
        return $calculatorsItem;
    }
}
