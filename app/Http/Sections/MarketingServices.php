<?php

namespace App\Http\Sections;

use App\Calculator;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminDisplayFilter;
use AdminFormElement;
use AdminSection;
use AdminForm;
/**
 * Class MarketingServices
 *
 * @property \App\MarketingService $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class MarketingServices extends Section implements Initializable
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
        $this->addToNavigation()->setPriority(200)->setTitle('Маркетинговые Услуги');
    }
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync();
        $display->with('calculator');
        $display->setFilters(
            AdminDisplayFilter::related('calculator_id')->setModel(Calculator::class)
        );

        $display->setColumns([
            $titleColumn = AdminColumn::link('title', 'Заголовок'),
            $keywordsColumn = AdminColumn::text('keywords', 'Ключевые слова'),
            $descriptionColumn = AdminColumn::text('description', 'Описание'),
            $nameColumn = AdminColumn::text('name', 'Название услуги'),
            $aliasColumn = AdminColumn::text('alias', 'Url услуги'),
            $previewdescColumn = AdminColumn::text('previewdesc', 'Описание услуги'),
            $priceColumn = AdminColumn::text('price', 'Стоимость услуги'),
            $calculatorTitleColumn = AdminColumn::text('calculator.title', 'Связанный калькулятор')->append(AdminColumn::filter('calculator_id')),
            $photoColumn = AdminColumn::image('img', 'Изображение'),
        ]);

        $titleColumn->getHeader()->setHtmlAttribute('class', 'bg-success text-center');
        $keywordsColumn->getHeader()->setHtmlAttribute('class', 'bg-primary');
        $descriptionColumn->getHeader()->setHtmlAttribute('class', 'bg-orange');
        $nameColumn->getHeader()->setHtmlAttribute('class', 'bg-maroon');
        $aliasColumn->getHeader()->setHtmlAttribute('class', 'bg-purple');
        $previewdescColumn->getHeader()->setHtmlAttribute('class', 'bg-primary');
        $priceColumn->getHeader()->setHtmlAttribute('class', 'bg-orange');
        $calculatorTitleColumn->getHeader()->setHtmlAttribute('class', 'bg-maroon');
        $photoColumn->getHeader()->setHtmlAttribute('class', 'bg-purple');

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
                        AdminFormElement::text('name', 'Название услуги')
                    ], 3)->addColumn([
                        AdminFormElement::text('alias', 'Url услуги')
                    ])->addColumn([
                        AdminFormElement::text('price', 'Стоимость услуги')
                    ])
            ]);

            $form->addBody([
                AdminFormElement::textarea('previewdesc', 'Описание услуги'),
            ]);

            $form->addFooter([
                AdminFormElement::image('img', 'Изображение'),
                AdminFormElement::multiselect('calculator', 'Опции в калькуляторе', \App\Calculator::class)->setDisplay('title')
            ]);

            $calculators = AdminSection::getModel(Calculator::class)->fireDisplay();

            $form->addBody([
                AdminFormElement::columns()->addColumn([
                    $calculators
                ])
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
