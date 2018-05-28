@if(isset($marketingServiceItems))

<section class="development-websites-block">
    <div class="container no-padding-development-websites-block">
        <div class="row">
            @foreach($marketingServiceItems as $marketingServiceItem)
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="grid">
                    <figure class="development-websites-item">
                        <img src="{{ $marketingServiceItem->img }}" alt="" class="development-websites-img img-fluid">
                        <div class="bg turquoise"></div>
                        <figcaption class="development-websites-content">
                            <div class="development-websites-title">
                                {{ $marketingServiceItem->title }}
                            </div>
                            <div class="development-websites-price">
                                {{ $marketingServiceItem->price }}
                            </div>
                            <div  class="development-websites-description">
                                {{ $marketingServiceItem->previewdesc }}
                            </div>
                            <div  class="development-websites-button-block">
                                <a href="{{ route('internet-marketing.show',['alias'=>$marketingServiceItem->alias]) }}" class="button-development-websites arrow-blue">Подробнее</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
                @endforeach
        </div>
    </div>
</section>
    @endif