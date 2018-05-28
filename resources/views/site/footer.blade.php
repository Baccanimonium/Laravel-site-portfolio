@if($siteInformation)
    @foreach($siteInformation as $siteInformations)
<footer class="footer-block" id="footer-block">
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-12">
            <div class="footer-item">
                <div class="logo-footer">
                    <img src="{{ asset('remake') }}/img/{{ $siteInformations->img->logofooter}}" alt="" class="img-fluid">
                </div>
                <div class="title-footer">
                    Мы в соцсетях
                </div>
                <div class="social-block">
                    <a href="" class="social-item">
                        <i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    <a href="" class="social-item">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="" class="social-item">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="footer-item">
                <div class="title-footer">
                    Контакты
                </div>
                <div class="footer-contact-item">
                    <div class="footer-icon marker">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="footer-contact-text">{{ $siteInformations->address }}</div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-icon phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <a class="footer-phone-link" href="tel:{!! $siteInformations->phone !!}"><span class="text-min">{!! $siteInformations->phone !!} </a>
                </div>
                <a href="" class="button button-footer" data-toggle="modal" data-target="#exampleModal">
                    Заказать звонок
                </a>
            </div>
        </div>
        @endforeach
@endif
        <div class="col-lg-6 col-md-6">
            <div class="footer-item pos-abs">
                <div class="title-footer">
                    Статьи в блоге
                </div>
                <div class="row">
                    @if($blog)
                    @foreach($blog as $item)
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="footer-article-block">
                            <div class="footer-article-img-block">
                                <img src="{{ $item->img }}" alt="" class="img-fluid">
                            </div>
                            <div class="footer-article-text">
                                {{  str_limit($item->previewdesc, 80 )}}
                                <a class="read-more" href="{{ route('blog.show',['alias'=>$item->alias]) }}">&rarr; {{ Lang::get('ru.read_more') }}</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

