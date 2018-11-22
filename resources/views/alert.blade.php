@foreach (['danger', 'warning', 'success', 'info'] as $key)
    @if(session()->has($key))
        <p class="alert alert-{{ $key }}">{{ session($key) }}</p>
    @endif
@endforeach

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
