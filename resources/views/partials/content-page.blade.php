@include('partials.layouts.inner_hero')

@if($layouts)
    @foreach($layouts as $key => $layout)
        @php $path='partials.layouts.'.$layout['acf_fc_layout'];  @endphp
        @include('partials.layouts.'.$layout['acf_fc_layout'])
    @endforeach
@endif
