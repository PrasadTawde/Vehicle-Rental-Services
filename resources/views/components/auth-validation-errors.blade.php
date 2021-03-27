@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}  style="color: red">
        <div>
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
