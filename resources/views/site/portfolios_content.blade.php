<section class="portfolio-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title-big uppercase">Портфолио</div>
            </div>
        </div>
        <div class="row portfolio-block-wrap">
            @if($portfoliosItems)
            <div class="col-lg-12 col-md-12">
                @foreach($portfoliosItems as $k=>$portfoliosItem)
                    @if($k%2 == 0)
                <div class="portfolio-item">
                    <div class="portfolio-wrap left-top">
                        <div class="portfolio-text">
                            <div class="title-portfolio line-left">
                                {{ $portfoliosItem->name }}
                            </div>
                            <div class="description-portfolio">
                                {{ $portfoliosItem->previewdesc }}
                            </div>
                            <a href="{{ route('portfolios.show',['alias'=>$portfoliosItem->alias]) }}" class="button-portfolio">
                                Как создавалось
                            </a>
                        </div>
                    </div>
                    <div class="portfolio-block-img" style="background-image: url('{{ $portfoliosItem->img }}'); background-repeat:no-repeat; background-position: center;"></div>
                </div>
                    @elseif($k%2 == 1)
                <div class="portfolio-item mt">
                    <div class="portfolio-block-img" style="background-image: url('{{ $portfoliosItem->img }}'); background-repeat:no-repeat; background-position: center;"></div>
                    <div class="portfolio-wrap right-bottom">
                        <div class="portfolio-text">
                            <div class="title-portfolio line-right">
                                {{ $portfoliosItem->name }}
                            </div>
                            <div class="description-portfolio">
                                {{ $portfoliosItem->previewdesc }}
                            </div>
                            <a href="{{ route('portfolios.show',['alias'=>$portfoliosItem->alias]) }}" class="button-portfolio">
                                Как создавалось
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
                @endforeach
                @endif
        </div>
    </div>
</section>