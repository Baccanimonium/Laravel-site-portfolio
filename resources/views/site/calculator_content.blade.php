@if($calculatorItems->count() !== 0)
<section class="calculator-block">
    @foreach($calculatorItems as $calculatorItem)
    <div class="container">
        <div class="row">
            <div class="ol-lg-12 col-md-12">
                <div class="title-big">
                    {{ $calculatorItem->title }}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($calculatorItem->options as $optionItem)
                @if($loop->count <=5)
                    @if($loop->count % 3 !== 0)
                        @if($loop->count % 3 == 2)
                            @if($loop->remaining == 1 || $loop->last)
                                <div class="col-xl-6 col-lg-6">
                            @else
                                <div class="col-xl-4 col-lg-6">
                            @endif
                        @elseif($loop->count % 3 == 1)
                            @if($loop->last)
                                <div class="col-xl-12 col-lg-12">
                            @else
                                <div class="col-xl-4 col-lg-6">
                            @endif
                        @endif
                    @else
                        <div class="col-xl-4 col-lg-6">
                    @endif
                @else
                    @if($loop->count % 3 !== 0)
                        @if($loop->count % 3 == 2)
                            @if($loop->remaining == 1 || $loop->last)
                                <div class="col-xl-6 col-lg-6">
                            @else
                                @if($loop->iteration %2 == 1)
                                    <div class="col-xl-4 col-lg-6">
                                @endif
                            @endif
                        @elseif($loop->count % 3 == 1)
                            @if($loop->last)
                                <div class="col-xl-12 col-lg-12">
                            @else
                                @if($loop->iteration %2 == 1)
                                    <div class="col-xl-4 col-lg-6">
                                @endif
                            @endif
                        @endif
                    @else
                        @if($loop->iteration %2 == 1)
                        <div class="col-xl-4 col-lg-6">
                        @endif
                    @endif
                @endif
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
            @if($loop->count >5)
                @if($loop->count % 3 == 2)
                    @if($loop->remaining == 1 || $loop->last || $loop->iteration %2 == 0)
                        </div>
                    @endif
                @elseif($loop->count % 3 == 1)
                    @if($loop->last || $loop->iteration %2 == 0)
                        </div>
                    @endif
                @else
                    @if($loop->iteration %2 == 0)
                        </div>
                    @endif
                @endif
            @else
                </div>
            @endif
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
    @endforeach
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
                    <a href="" class="button-download-calculation">Скачать  расчет</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif