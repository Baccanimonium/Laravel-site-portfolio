<section class="development-websites-block">
    @if($siteServiceItems)
    <div class="container no-padding-development-websites-block">
        <div class="row">
            @foreach($siteServiceItems as $siteServiceItem)
                @if($loop->count % 3 == 0)
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="grid">
                        <figure class="development-websites-item">
                            <img src="{{$siteServiceItem->img}}" alt="" class="development-websites-img img-fluid">
                               <div class="bg turquoise"></div>
                                  <figcaption class="development-websites-content">
                                      <div class="development-websites-title">
                                                    {{$siteServiceItem->title}}
                                        </div>
                                          <div class="development-websites-price">
                                                    {{$siteServiceItem->price}} Р.
                                            </div>
                                                <div  class="development-websites-description">
                                                    {{  str_limit($siteServiceItem->previewdesc,110)}}
                                                </div>
                                                <div  class="development-websites-button-block">
                                                    <a href="{{ route('razrabotka-saitov.show',['alias'=>$siteServiceItem->alias]) }}" class="button-development-websites arrow-blue">Подробнее</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

            @elseif($loop->count % 3 == 2)
                @if($loop->last || $loop->remaining == 1 )
                        <div class="col-lg-6 col-md-6">
                            <div class="grid" style="display: flex; justify-content: center;">
                                <figure class="development-websites-item blue unique-project">
                @else
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="grid">
                                <figure class="development-websites-item">
                        @endif

                        <img src="{{$siteServiceItem->img}}" alt="" class="development-websites-img img-fluid">
                        <div class="bg turquoise"></div>
                        <figcaption class="development-websites-content">
                            <div class="development-websites-title">
                                {{$siteServiceItem->title}}
                            </div>
                            <div class="development-websites-price">
                                {{$siteServiceItem->price}} Р.
                            </div>
                            <div  class="development-websites-description">
                                {{  str_limit($siteServiceItem->previewdesc,110)}}
                            </div>
                            <div  class="development-websites-button-block">
                                <a href="{{ route('razrabotka-saitov.show',['alias'=>$siteServiceItem->alias]) }}" class="button-development-websites arrow-blue">Подробнее</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            @elseif($loop->count % 3 == 1)
                @if($loop->last)
                    <div class="col-lg-12 col-md-12">
                        <div class="grid" style="display: flex; justify-content: center;">
                            <figure class="development-websites-item blue unique-project">
            @else
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="grid">
                        <figure class="development-websites-item">
                            @endif

                            <img src="{{$siteServiceItem->img}}" alt="" class="development-websites-img img-fluid">
                            <div class="bg turquoise"></div>
                            <figcaption class="development-websites-content">
                                <div class="development-websites-title">
                                    {{$siteServiceItem->title}}
                                </div>
                                <div class="development-websites-price">
                                    {{$siteServiceItem->price}} Р.
                                </div>
                                <div  class="development-websites-description">
                                    {{  str_limit($siteServiceItem->previewdesc,110)}}
                                </div>
                                <div  class="development-websites-button-block">
                                    <a href="{{ route('razrabotka-saitov.show',['alias'=>$siteServiceItem->alias]) }}" class="button-development-websites arrow-blue">Подробнее</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
        @endif
</section>