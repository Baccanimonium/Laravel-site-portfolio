<?php

namespace App\Http\Sections;

use App\Menu;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;

/**
 * Class Menus
 *
 * @property \App\Menu $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Menus extends Section implements Initializable
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
    public function initialize()
    {
        $this->addToNavigation()->setPriority(50)->setTitle('Разделы Меню');
    }

    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setDisplaySearch(true)->paginate(15);

        $display->setColumns([
            AdminColumn::link('title')->setLabel('Title'),
            AdminColumn::text('path')->setLabel('Url Страницы')->setHtmlAttribute('class', 'text-muted'),
            AdminColumn::custom('Дочерняя ссылка', function ($instance) {
                return $instance->parent && $this->model->where($instance->parent == $this->model->id) ?'<i class="fa fa-check"></i>'  : '<i class="fa fa-minus"></i>';
            })->setWidth('150px')->setHtmlAttribute('class', 'text-center'),
        ]);

        return $display;

    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('path', 'Url Страницы')->required(),
            AdminFormElement::select('parent', 'Родительская группа', $this->model)->setDisplay('title'),

        ]);
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

    /**
     * Initialize class.
     */

}
