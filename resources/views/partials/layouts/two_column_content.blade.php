@php

$heading = $layout['heading'];

$heading_type = $layout['heading_type'];

$background_type = $layout['background_type'];

$top_content = $layout['top_content'];

$left_content = $layout['left_content'];

$right_content = $layout['right_content'];

@endphp

@if($background_type=="white")
    @php $section = " two-column-content-with-white-pattern " @endphp
@else
    @php $section = " two-column-content-with-orange-pattern  text-white " @endphp
@endif

@if($heading || $top_content || $left_content || $right_content)
<section class="two-columns-content{{$section}}bg-cover pt-12 pb-10 lg:pb-2 bg-center lg:px-5" id="two-column-content-section_{{ get_the_ID() }}_{{$key}}">
    <div class="container mx-auto">
        @if($heading || $top_content)
        <div class="text-center pt-8 lg:pt-20">
            @if($heading)<h2 class="z-10 relative text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5 pb-5">{!! $heading !!}</h2>@endif
            @if($top_content)
                <div class="top-content royal-blue-color lg:grid grid-cols-12">
                    <div class="col-start-4 col-span-6">
                        @if($top_content)<div class="wysiwig_content">{!! $top_content !!}</div>@endif
                    </div>
                </div>   
            @endif         
        </div> 
        @endif
        <div class="block lg:grid grid-cols-2 mt-8 lg:mt-0 items-baseline lg:mx-auto lg:w-4/5">
            @if($left_content)
            <div class="check-list lg:pr-12 pl-7">
                @if($left_content)<div class="wysiwig_content">{!! $left_content !!}</div>@endif
            </div>
            @endif
            <div class="welcome-content lg:py-16 lg:pl-8 check-list pl-7">
                @if($right_content)<div class="wysiwig_content">{!! $right_content !!}</div>@endif
            </div>
        </div>
    </div>
</section>
@endif

