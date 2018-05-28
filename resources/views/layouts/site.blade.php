<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('remake') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('remake') }}/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('remake') }}/css/styles.css">
    <meta name="description" content="{{ (isset($meta_description)) ? $meta_description : '' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}">
    <title>{{ $title or 'Remake' }}</title>
    <meta name="csrf-token" content=" {{ csrf_token() }}"/>
    </head>
<body>
@foreach($siteInformation as $information)

<header class="header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-12 bg">
                <a href="{{ route('home') }}" class="header-logo-block">
                    <img src="{{ asset('remake') }}/img/{{ $information->img->logo}}" alt="" class="img-fluid img-logo-header">
                </a>
            </div>
            <div class="col-lg-9 col-md-7 col-12">
                <div class="row header-top-block">
                    <div class="col-lg-6 col-md-12  header-top-item">
                        <div class="header-icon marker">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>{{ $information->address }}
                    </div>

                    <!--<div class="col-lg-4 col-md-6 header-top-item center-item">-->
                    <!--<div class="header-icon phone">-->
                    <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
                    <!--</div>-->
                    <!--<a class="header-phone-link" href="tel:+74955300500"><span class="text-min">+7 (3452)</span> 99-55-33</a>-->
                    <!--</div>-->

                    <!--<div class="col-lg-2 col-md-6 header-top-item flex-end">-->
                    <!--<a href="" class="button min">-->
                    <!--Заказать звонок-->
                    <!--</a>-->
                    <!--</div>-->

                    <div class="block-call col-lg-6  col-md-12">
                        <div class="header-top-item phone-block">
                            <div class="header-icon phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <a class="header-phone-link" href="tel:{{ $information->phone }}"><span class="text-min">{!!$information->phone!!} </a>
                        </div>
                        <div class="header-top-item">
                            <a href="" class="button min" data-toggle="modal" data-target="#exampleModal">
                                Заказать звонок
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-bottom-block">
                    @endforeach
                    @yield('navigation')
                </div>
            </div>
        </div>
    </div>
</header>

    @yield('content')


    @yield('footer')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку<br>
                    <span> и мы Вам перезвоним</span>
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-modal" action="">
                <div class="input-group justify-content-center">
                    <input type="text" name="NAME" class="form-control" placeholder="Ваше имя">

                </div>
                <div class="input-group justify-content-center">
                    <input type="text" name="PHONE" class="form-control" placeholder="Номер телефона">
                </div>
                <button type="submit" class="button-primary justify-content-center"> Отправить заявку</button>
            </form>

            <div class="modal-footer">
                <div class="text-confidentiality">
                    Заполняя данную форму, Вы соглашаетесь с политикой конциденциальности сайта.
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/0ddad71e7a.js"></script>
<script src="{{ asset('remake') }}/js/slick.min.js"></script>
<script src="{{ asset('remake') }}/js/general.js"></script>
</body>
</html>