<section class="blog-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="title-big uppercase">
                    Блог
                </div>
                @if($blog)
                    @foreach($blog as $item)
                <a href="{{ route('blog.show',['alias'=>$item->alias]) }}" class="blog-item">
                    <div class="blog-img-block">
                        <img src="{{ $item->img }}" alt="" class="img-fluid blog-img">
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content">
                            <div class="blog-title">
                                {{ $item->title }}
                            </div>
                            <div class="blog-text">
                                {{ $item->previewdesc }}
                            </div>
                            <div class="blog-data">
                                {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>