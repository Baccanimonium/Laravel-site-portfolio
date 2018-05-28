<section class="service-main-block">
    <div class="container">
        @if($ourServiceItems)
            @foreach($ourServiceItems as $k=>$serviceItem)
                @if($k%2 == 0)
        <div class="services-item">
            <div class="row no-gutters">
                <div class="col-lg-6 col-12 no-padding">
                    <div class="service-main-block-img arrow-right" style="background-image: url('{{$serviceItem->img}}');
                    background-repeat:no-repeat; background-position: center;">
                        <div class="bg"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 no-padding">
                    <div class="service-main-block-text">
                        <div class="title">{{$serviceItem->name}}</div>
                        <div class="service-main-text">{{$serviceItem->previewdesc}}</div>
                        <a href="{{ $serviceItem->alias }}" class="button medium">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
                @elseif($k%2 == 1)

        <div class="services-item">
            <div class="row no-gutters column-reverse">
                <div class="col-lg-6 col-12 no-padding">
                    <div class="service-main-block-text">
                        <div class="title">{{$serviceItem->name}}</div>
                        <div class="service-main-text">{{$serviceItem->previewdesc}}</div>
                        <a href="{{ $serviceItem->alias }}" class="button medium">Узнать больше</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 no-padding">
                    <div class="service-main-block-img arrow-left" style="background-image: url('{{$serviceItem->img}}');
                    background-repeat:no-repeat;
                    background-position: center;">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
                @endif

            @endforeach
            @endif
    </div>

</section>
