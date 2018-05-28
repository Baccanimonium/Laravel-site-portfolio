<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminSection;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;

use SleepingOwl\Admin\Section;

/**
 * Class Calculators
 *
 * @property \App\Calculator $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Calculators extends Section
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

        $display = AdminDisplay::datatablesAsync()->setDisplaySearch(true)->paginate(15);
        $display->with('options');

        $display->setColumns([
            AdminColumn::link('title')->setLabel('Название калькулятора')->setWidth('200px'),
            AdminColumn::lists('options.title', 'Опции')
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
        $display= AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Заголовок калькулятора')->required(),
            AdminFormElement::multiselect('options', 'Опции в калькуляторе', \App\Options::class)->setDisplay('title'),
        ]);
        $options = AdminSection::getModel(\App\Options::class)->fireDisplay()->paginate(10);
        $display->addBody([
            AdminFormElement::columns()->addColumn([
                $options
            ])
        ]);
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
