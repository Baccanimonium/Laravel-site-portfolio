<?php

namespace App\Http\Sections;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminDisplayFilter;
use App\SiteService;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Portfolio
 *
 * @property \App\Portfolio $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Portfolios extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync();
        $display->with('siteService');
        $display->setFilters(
            AdminDisplayFilter::related('site_service_id')->setModel(SiteService::class)
        );

        $display->setColumns([
            AdminColumn::link('title', 'Заголовок'),
            AdminColumn::text('keywords', 'Ключевые слова'),
            AdminColumn::text('description', 'Мета Описание'),
            AdminColumn::text('name', 'Название работы'),
            AdminColumn::text('alias', 'Url работы'),
            AdminColumn::text('previewdesc', 'Описание работы')->setWidth('250px'),
            AdminColumn::text('siteService.title', 'Отображается в Услуге')->append(AdminColumn::filter('site_service_id')),
            AdminColumn::image('img', 'Изображение'),
        ]);

        // Change Control Column
        $display->getColumns()->getControlColumn()->getHeader()->setTitle('Опции')->setHtmlAttribute('class', 'bg-black');

        $display->paginate(10);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $display = AdminDisplay::tabbed();

        $display->setTabs(function() use ($id) {
            $tabs = [];

            $form = AdminForm::panel();
//
            $form->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title', 'Заголовок')->required()
                ], 3)->addColumn([
                    AdminFormElement::text('keywords', 'Ключевые слова')->required()
                ], 3)->addColumn([
                    AdminFormElement::text('description', 'Мета описание')->required()
                ])
            );
//
            $form->addBody([
                AdminFormElement::columns()
                    ->addColumn([
                        AdminFormElement::text('name', 'Название работы')->required()
                    ], 3)->addColumn([
                        AdminFormElement::text('alias', 'Url работы')->required()->unique()
                    ])->addColumn([
                        AdminFormElement::select('site_service_id', 'К какому типу сайтов относится',\App\SiteService::class)->required()
                    ])
            ]);

            $form->addBody([
                AdminFormElement::textarea('previewdesc', 'Описание работы'),
            ])->addBody([
                AdminFormElement::textarea('text', 'Текст к работе'),
            ]);

            $form->addFooter([
                AdminFormElement::image('img', 'Изображение'),
            ]);


            $tabs[] = AdminDisplay::tab($form, 'Main Form')->setActive(true)->setIcon('<i class="fa fa-credit-card"></i>');


            return $tabs;
        });


        return $display;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
