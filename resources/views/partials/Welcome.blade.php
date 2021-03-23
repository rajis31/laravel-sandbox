@push("styles")
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
@endpush

<div class="welcome">
    <p style="color:red;"> Welcome <em>{{$name}}</em></p>
</div>
