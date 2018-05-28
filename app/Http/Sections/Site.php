<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminSection;
use AdminForm;
/**
 * Class Site
 *
 * @property \App\Site $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Site extends Section implements Initializable
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
        $this->addToNavigation()->setPriority(10000)->setTitle('Основные элементы сайта');
    }


    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync();
        $display->setColumns([
            AdminColumn::link('address', 'Адресс офиса')->setHtmlAttribute('class', 'hidden-sm hidden-xs'),
            AdminColumn::text('phone', 'Наш телефон')->setHtmlAttribute('class', 'hidden-sm hidden-xs hidden-md'),
            AdminColumn::text('skype', 'Наш скайп')->setHtmlAttribute('class', 'hidden-sm hidden-xs hidden-md'),
            AdminColumn::text('img', 'Логотип/логотип футера')->setHtmlAttribute('class', 'hidden-sm hidden-xs'),
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
                        AdminFormElement::text('address', 'Заголовок Отзыва')->required(),
                        AdminFormElement::text('phone', 'Наш телефон')->required()
                        ,

                    ];
                })->addColumn(function() {
                    return [
                        AdminFormElement::textarea('skype', 'Наш скайп')->required(),
                        AdminFormElement::text('img', 'Лого/лого футер. (подставте название файла за место старого).Важно: файл должен хранится в /Remake/img/')->required()
                    ];
                })
        );
        return $form;
    }

    /**
     * @return FormInterface
     */


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
