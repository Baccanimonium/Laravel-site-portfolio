<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminDisplayFilter;
use App\SiteService;
/**
 * Class Responses
 *
 * @property \App\Response $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Responses extends Section
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
            AdminColumn::link('title', 'Заголовок Отзыва')->setHtmlAttribute('class', 'hidden-sm hidden-xs'),
            AdminColumn::text('text', 'Текст Отзыва')->setHtmlAttribute('class', 'hidden-sm hidden-xs hidden-md'),
            AdminColumn::text('siteService.title', 'Отображается в Услуге')->append(AdminColumn::filter('site_service_id'))->setHtmlAttribute('class', 'hidden-sm hidden-xs hidden-md'),
            AdminColumn::image('img', 'Фото')->setHtmlAttribute('class', 'hidden-sm hidden-xs'),
        ]);
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
        $form = AdminForm::panel();

        $form->setItems(
            AdminFormElement::columns()
                ->addColumn(function() {
                    return [
                        AdminFormElement::text('title', 'Заголовок Отзыва')->required(),
                        AdminFormElement::select('site_service_id', 'К какому типу сайтов относится',\App\SiteService::class)->required()
                        ,
                        AdminFormElement::image('img', 'Photo')
                    ];
                })->addColumn(function() {
                    return [
                        AdminFormElement::textarea('text', 'Текст отзыва'),
                    ];
                })
        );

        return $form;
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
