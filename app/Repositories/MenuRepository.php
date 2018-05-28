<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.01.2018
 * Time: 1:08
 */
namespace App\Repositories;

class MenuRepository extends Repository
{
    public function __construct(\App\Menu $menu)
    {
        $this->model = $menu;
    }

    /**
     * @param $request
     * @return array
     */
    public function addMenu($request)
    {
        $data = $request->only('type','title','parent');
        if (empty($data)) {
            return ['error'=>'нет данных'];
        }
        switch ($data['type']) {
            case'customLink':
                $data['path'] = $request->input('custom_link');
                break;
            case 'blogLink':
                if ($request->input('category_alias')) {
                    if ($request->input('category_alias') =='parent') {
                        $data['path'] = route('articles.index');
                    } else {
                        $data['path']=route('articlesCat',['cat_alias'=>$request->input('category_alias') ]);
                    }
                } elseif ($request->input('article_alias')) {
                    $data['path']=route('articles.show',['alias'=>$request->input('article_alias')]);
                }
                break;
            case 'portfolioLink':
                if ($request->input('filter_alias')) {
                    if ($request->input('filter_alias') == 'parent') {
                        $data['path'] = route('portfolios.index');
                    }

                } elseif ($request->input('portfolio_alias')) {
                    $data['path']=route('portfolios.show',['alias'=>$request->input('portfolio_alias')]);
                }
                break;
            default:
                $data['path'] = route('home');
        }
        unset($data['type']);
        if ($this->model->fill($data)->save()) {
            return ['status'=>'ссылка добавленна'];
        };
    }

    public function updateMenu($request, $adminMenu)
    {
        $data = $request->only('type','title','parent');
        if (empty($data)) {
            return ['error'=>'нет данных'];
        }
        switch ($data['type']) {
            case'customLink':
                $data['path'] = $request->input('custom_link');
                break;
            case 'blogLink':
                if ($request->input('category_alias')) {
                    if ($request->input('category_alias') =='parent') {
                        $data['path'] = route('articles.index');
                    } else {
                        $data['path']=route('articlesCat',['cat_alias'=>$request->input('category_alias') ]);
                    }
                } elseif ($request->input('article_alias')) {
                    $data['path']=route('articles.show',['alias'=>$request->input('article_alias')]);
                }
                break;
            case 'portfolioLink':
                if ($request->input('filter_alias')) {
                    if ($request->input('filter_alias') == 'parent') {
                        $data['path'] = route('portfolios.index');
                    }

                } elseif ($request->input('portfolio_alias')) {
                    $data['path']=route('portfolios.show',['alias'=>$request->input('portfolio_alias')]);
                }
                break;
            default:
                $data['path'] = route('home');
        }
        unset($data['type']);
        if ($adminMenu->fill($data)->update()) {
            return ['status'=>'ссылка Обновлена'];
        };
    }

    public function deleteMenu($adminMenu)
    {
        if ($adminMenu->delete()) {
            return['status'=>'Ссылка удаленна'];
        }
    }
}