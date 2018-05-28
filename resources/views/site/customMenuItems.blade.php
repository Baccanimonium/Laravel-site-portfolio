@foreach($items as $item)
    <li class="nav-item {{ (URL::current() == $item->url() ? "active" : '' )}}" >
        <a class="nav-link" href="{{ $item->url() }}">{{ $item->title }}</a>
        @if($item->hasChildren())
            <ul class="sub-menu">
                @include('site.customMenuItems',['items'=>$item->children()])
            </ul>
            @endif
    </li>
    @endforeach