<section class="contact-block">
    @foreach($siteInformation as $information)
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-big uppercase">
                    Контакты
                </div>
            </div>
        </div>
        <div class="map-block">
            <div class="map-img" style="background-image: url('{{ asset('remake') }}/img/map.jpg'); background-repeat:no-repeat; background-position: center;">
            </div>
            <div class="contact-block-wrap">
                <div class="contact-block-content">
                    <div class="contact-item-content">
                        <div class="contact-icon marker">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">{{ $information->address }}</div>
                    </div>
                    <div class="contact-item-content">
                        <div class="contact-icon phone">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <a class="contact-phone-link contact-text" href="tel:{!!$information->phone!!}"><span class="text-min">{!!$information->phone!!}</a>
                    </div>
                    <div class="contact-item-content">
                        <div class="contact-icon skype">
                            <i class="fa fa-skype" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">Соцсети</div>
                    </div>
                </div>
                <div class="contact-form-block">
                    <div class="title-contact-form">
                        Оставьте заявку<br>
                        и мы Вам перезвоним
                    </div>
                    <form method="post" action="{{ route('contacti') }}" class="form-block">
                        <div class="input-group">
                            <input type="text" name="NAME" class="form-contact-input" placeholder="Ваше имя">
                        </div>
                        <div class="input-group">
                            <input type="text" name="PHONE" class="form-contact-input" placeholder="Номер телефона">
                        </div>
                        <button type="submit" class="button-form">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        @endforeach
</section>