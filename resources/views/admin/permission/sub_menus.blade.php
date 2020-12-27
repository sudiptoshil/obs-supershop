<li>{{ $sub->title }}</li>
@if ($sub->permissions)
    <ul>
        @if(count($sub->permissions) > 0)
            @foreach ($sub->permissions as $sub)
                @include('sub_menus', ['sub' => $sub])
            @endforeach
        @endif
    </ul>
@endif