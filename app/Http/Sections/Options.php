<?php

namespace App\Http\Sections;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminSection;
use App\Price;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Options
 *
 * @property \App\Options $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Options extends Section
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
    protected $alias = 'options';



    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setDisplaySearch(true)->paginate(15);
        $display->with('price');

        $display->setColumns([
            AdminColumn::link('title')->setLabel('Title'),

            AdminColumn::lists('price.name')->setLabel('Включенные услуги')->setHtmlAttribute('class', 'text-muted'),

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
            AdminFormElement::multiselect('price', 'Опции в калькуляторе', \App\Price::class)->setDisplay('name'),

        ]);
        $price = AdminSection::getModel(Price::class)->fireDisplay()->paginate(10);
        $display->addBody([
            AdminFormElement::columns()->addColumn([
                $price
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
