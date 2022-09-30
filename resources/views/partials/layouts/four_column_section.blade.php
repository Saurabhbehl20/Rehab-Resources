@php

$heading = $layout['heading_text'];

$heading_type = $layout['heading_type'];

$content = $layout['content'];

$columns = $layout['columns'];

@endphp

@if($heading || $content || $columns)
<section class="four-column-section relative yellow-icon before-icon-up bg-cover py-12 lg:pb-32 lg:px-5" id="four-column-section-{{$key}}">
    <div class="container mx-auto">
        @if($heading || $content)
        <div class="text-center pt-4">
            @if($heading)<{{$heading_type}} class="z-10 relative text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5 pb-5">{!! $heading !!}</{{$heading_type}}>@endif
            @if($content)<div class="wysiwig_content"><p>{!! $content !!}</p></div>@endif
        </div> 
        @endif
        @if($columns)
        <div class="grid grid-cols-2 lg:grid-cols-4 mt-16 text-center lg:mt-10 items-center lg:mx-auto">
            @foreach($columns as $column)
                @if($column['icon'] || $column['heading'])
                <div class="expertise-inner-col mb-8 lg:mb-0">
                    @if($column['icon'])<img src="{{$column['icon']['url']}}" class="w-20 lg:w-28 mx-auto" alt="{{$column['icon']['alt']}}">@endif
                    @if($column['heading'])<h2 class="text-16 lg:text-24 dark-navy-color font-medium">{!! $column['heading'] !!}</h2>@endif
                </div>
                @endif
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif