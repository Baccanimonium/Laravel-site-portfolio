@if(isset($internetMarketingItem))
<section class="description-service-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-big  uppercase">
                    {{$internetMarketingItem->title}}
                </div>
                <div class="description-service-wrap">
                    <div class="description-service-item">
                        {{$internetMarketingItem->previewdesc}}
                    </div>
                    <div class="description-service-item">
                        веб-страница, основной задачей которой является сбор контактных данных целевой аудитории. Используется для усиления эффективности рекламы, увеличения аудитории. Целевая страница обычно содержит информацию о товаре или услуг.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(isset($internetMarketingItem->calculator->options ))
<section class="calculator-block">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($internetMarketingItem->calculator->options as $optionItem)
            <div class="col-xl-4 col-lg-6">
                <div class="calculator-item">
                    <div class="calculator-title">
                        {{ $optionItem->title }}
                    </div>
                    <div class="border-left">
                        @foreach($optionItem->price as $priceItem)
                        <div class="calculator-option-block">
                            <div class="calculator-option-form">
                                <label class="calculator-option-form-label">
                                    <input type="checkbox"  name="option1" value="a1" class="checkbox">
                                    <span class="checkbox-custom"></span>
                                    <span class="label">{{ $priceItem->name }}</span>
                                </label>
                            </div>
                            <div class="price-block">
                               от {{ $priceItem->price }} р.
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="calculator-price">
                    Итого: 25 900 р.
                </div>
            </div>
        </div>
    </div>
</section>


<section class="form-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr0">
                <div class="border-form-right">
                    <div class="title-form">
                        Узнайте больше
                    </div>
                    <div class="form-description mr">
                        У вас остались вопросы? Или не знаете что нужно для Вашего бизнеса? Оставьте свои контактные данные и мы Вам подскажем какой вид сайта подойдет именно Вам!
                    </div>

                    <form action="" class="form-block">
                        <div class="input-group">
                            <input type="text" name="NAME" class="form-main-input" placeholder="Ваше имя">
                        </div>
                        <div class="input-group">
                            <input type="text" name="PHONE" class="form-main-input" placeholder="Номер телефона">
                        </div>
                        <button type="submit" class="button-form" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
                        <label class="form-name-checkbox">
                            <input type="checkbox"  name="option1" value="a1" class="checkbox">
                            <span class="checkbox-custom"></span>
                            <span class="label">Нажимая кнопку “Заказать звонок” Вы соглашаетесь<br>
с политикой конфиденциальности</span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="title-form tar">
                    Скачайте расчет
                </div>
                <div class="form-description tar">
                    Вы можете абсолютно бесплатно скачать расчет стоимости сайта. Без заполнения  любой информации. Информация предоставляется  исключительно в ознокомительных целях. Цены не являютя окончательными.
                </div>
                <div class="button-block">
                    <a href="" class="button-download-calculation">Скачать расчет</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
    @endif