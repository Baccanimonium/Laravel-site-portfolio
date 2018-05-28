@if(isset($siteServiceItem))
<section class="description-detailed-page-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-big">
                    {{$siteServiceItem->title}}
                </div>
                <div class="description-detailed-page-wrap">
                    <div class="description-detailed-page-item">
                        {{$siteServiceItem->previewdesc}}  Целевая страница обычно содержит информацию о товаре или услуг.
                    </div>
                    <div class="description-detailed-page-item">
                        веб-страница, основной задачей которой является сбор контактных данных целевой аудитории. Используется для усиления эффективности рекламы, увеличения аудитории. Целевая страница обычно содержит
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="examples-works-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-line-block">
                    <div class="title-medium">Примеры работ</div>
                    <hr class="line-title">
                </div>
                <div class="examples-works-slider">
                    @foreach($siteServiceItem->portfolios as $portfolio)

                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="/{{ $portfolio->img }}" alt="" class="img-fluid examples-works-slider">
                        </div>
                        <div class="slider-content-wrap">
                            <div class="slider-content">
                                <div class="title-slider">
                                    {{ $portfolio->title }}
                                </div>
                                <div class="description-slider">
                                    {{ $portfolio->previewdesc }}
                                </div>
                                <div class="button-wrap">
                                    <a href="" class="button-slider">
                                        Узнать больше
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ask-question-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 ask-question-wrap">
                <div class="title-ask-question">
                    Есть вопросы?
                </div>
                <div class="title-ask-question-light">
                    Спросите специалиста!
                </div>
                <form action="" class="ask-question-form">
                    <div class="input-group">
                        <input type="text" name="NAME" class="form-ask-question-input" placeholder="Ваше имя">
                        <input type="text" name="PHONE" class="form-ask-question-input" placeholder="Номер телефона">
                    </div>
                    <button type="submit" class="button-form">Задать вопрос</button>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="women-ask-question">
                    <img src="{{ asset('remake') }}/img/women-ask-question.png" alt="" class="img-fluid  women-ask-question-img">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-stages-block  d-block d-xl-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-line-block">
                    <div class="title-medium">Этапы работы</div>
                    <hr class="line-title">
                </div>
            </div>
        </div>
        <div class="work-stages-wrap">
            <div class="row work-stages-item">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block blue">
                        <div class="work-stages-title right">
                            Определение целей<br>
                            UI/UX дизайн
                        </div>
                        <hr class="line-blue right-line">
                        <div class="work-stages-description right">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-left-adaptive arrow-top-adaptive blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <div class="bg blue"></div>
                        </div>
                        <div class="figure">1</div>
                    </div>
                </div>
            </div>

            <div class="row work-stages-item column-reverse">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-right-adaptive turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-2.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                            <div class="bg turquoise"></div>
                        </div>
                        <div class="figure">2</div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block turquoise">
                        <div class="work-stages-title left">
                            Отрисовка<br>
                            прототипов
                        </div>
                        <hr class="line-turquoise left-line">
                        <div class="work-stages-description left">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
            </div>

            <div class="row work-stages-item">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block blue">
                        <div class="work-stages-title right">
                            Дизайн<br>
                            сайта
                        </div>
                        <hr class="line-blue right-line">
                        <div class="work-stages-description right">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-left-adaptive blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-3.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                            <div class="bg blue"></div>
                        </div>
                        <div class="figure">3</div>
                    </div>
                </div>
            </div>

            <div class="row work-stages-item column-reverse">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-right-adaptive turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-4.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                            <div class="bg turquoise"></div>
                        </div>
                        <div class="figure">4</div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block turquoise">
                        <div class="work-stages-title left">
                            Верстка<br>
                            сайта
                        </div>
                        <hr class="line-turquoise left-line">
                        <div class="work-stages-description left">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
            </div>

            <div class="row work-stages-item">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block blue">
                        <div class="work-stages-title right">
                            Внедрение верстки<br>
                            в CMS
                        </div>
                        <hr class="line-blue right-line">
                        <div class="work-stages-description right">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-left-adaptive blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-5.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <div class="bg blue"></div>
                        </div>
                        <div class="figure">5</div>
                    </div>
                </div>
            </div>

            <div class="row work-stages-item column-reverse">
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-right-adaptive  turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-6.jpg');
                            background-repeat: no-repeat;
                            background-position: center; background-size: cover;">
                            <div class="bg turquoise"></div>
                        </div>
                        <div class="figure">6</div>
                    </div>
                </div>
                <div class="col-lg-6 no-padding d-block d-xl-none">
                    <div class="work-stages-text-block turquoise">
                        <div class="work-stages-title left">
                            Отладка<br>
                            сайта
                        </div>
                        <hr class="line-turquoise left-line">
                        <div class="work-stages-description left">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-stages-block none-xl">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-line-block">
                    <div class="title-medium">Этапы работы</div>
                    <hr class="line-title">
                </div>
            </div>
        </div>
        <div class="row work-stages-wrap">
            <div class="col-xl-8 d-block d-lg-none d-xl-block">
                <div class="row work-stages-item">
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-img-block">
                            <div class="work-stages-img arrow-right blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                                <div class="bg blue"></div>
                            </div>
                            <div class="figure">1</div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-text-block blue">
                            <div class="work-stages-title right">
                                Определение целей<br>
                                UI/UX дизайн
                            </div>
                            <hr class="line-blue right-line">
                            <div class="work-stages-description right">
                                На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row work-stages-item">
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-text-block blue">
                            <div class="work-stages-title left">
                                Дизайн<br>
                                сайта
                            </div>
                            <hr class="line-blue left-line">
                            <div class="work-stages-description left">
                                На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-img-block">
                            <div class="work-stages-img arrow-left blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-3.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                                <div class="bg blue"></div>
                            </div>
                            <div class="figure">3</div>
                        </div>
                    </div>
                </div>

                <div class="row work-stages-item">
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-img-block">
                            <div class="work-stages-img arrow-right turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-4.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                                <div class="bg turquoise"></div>
                            </div>
                            <div class="figure">4</div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-text-block turquoise">
                            <div class="work-stages-title right">
                                Верстка<br>
                                сайта
                            </div>
                            <hr class="line-turquoise right-line">
                            <div class="work-stages-description right">
                                На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row work-stages-item">
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-text-block turquoise">
                            <div class="work-stages-title left">
                                Отладка<br>
                                сайта
                            </div>
                            <hr class="line-turquoise left-line">
                            <div class="work-stages-description left">
                                На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                        <div class="work-stages-img-block">
                            <div class="work-stages-img arrow-left turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-6.jpg');
                            background-repeat: no-repeat;
                            background-position: center; background-size: cover;">
                                <div class="bg turquoise"></div>
                            </div>
                            <div class="figure">6</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 d-block d-lg-none d-xl-block no-padding">
                <div class="work-stages-item flex">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-bottom turquoise" style="background-image: url('{{ asset('remake') }}/img/work-stages-2.jpg');
                background-repeat: no-repeat;
                background-position: center; background-size: cover;">
                            <div class="bg turquoise"></div>
                        </div>
                        <div class="figure">2</div>
                    </div>
                    <div class="work-stages-text-block turquoise">
                        <div class="work-stages-title center">
                            Отрисовка<br>
                            прототипов
                        </div>
                        <hr class="line-turquoise center-line">
                        <div class="work-stages-description center">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>

                <div class="work-stages-item flex">
                    <div class="work-stages-img-block">
                        <div class="work-stages-img arrow-bottom blue" style="background-image: url('{{ asset('remake') }}/img/work-stages-5.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <div class="bg blue"></div>
                        </div>
                        <div class="figure">5</div>
                    </div>
                    <div class="work-stages-text-block blue">
                        <div class="work-stages-title center">
                            Внедрение верстки<br>
                            в CMS
                        </div>
                        <hr class="line-blue center-line">
                        <div class="work-stages-description center">
                            На данном шаге очень важно понять зачем и для кого вы разрабатываете web-сайт. Без верно поставленных целей и задач вы не сможете создать необходимый сайт или сможете, но, даже в процессе создания сайта, вы поймете, что получите не то, что хотели. Вам необходимо плотно поработать с
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="want-learn-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="want-lear-wrap">
                    <div class="title-want-learn">
                        Хотите узнать как формируются цены?
                    </div>
                    <div class="description-want-learn">
                        Мы поможем Вам с этим разобраться. Не переплачивайте за услуги, которые Вам не передоставляют. Зайдите в калькулятор и выберите только те услуги услуги, которые Вам действительно нужны.
                        (Пример текста)
                    </div>
                    <div class="button-block">
                        <a href="" class="button-want-learn">Калькулятор</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="information-our-company-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-line-block">
                    <div class="title-medium">Информация о нашей компании</div>
                    <hr class="line-title">
                </div>
                <div class="information-our-company-description">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa..
                </div>
            </div>
        </div>
    </div>
</section>

<section class="responses-our-company-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-line-block">
                    <div class="title-medium">Отзывы о нашей компании</div>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="response-our-company-slider">

                    @foreach($siteServiceItem->responses as $responses)
                    <div class="responses-our-company-slider-item">
                        <div class="responses-our-company-slider-content">
                            <img src="/{{ $responses->img }}" alt="" class="img-fluid response-img">
                            <div class="responses-our-company-slider-title">
                                {!! $responses->title !!}
                            </div>
                            <div class="responses-our-company-slider-text">
                                {!! $responses->text !!}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endif