@php

$bg_image = $layout['background_image'];
$heading = $layout['heading'];
$heading_type = $layout['heading_type'];
$content = $layout['content'];
$background_type = $layout['background_type'];
$clip_path_class='';
$cont_class='';

@endphp

@if($background_type=='orange')
    @php
     $image = " two-column-with-bg-image-orange-pattren-section text-white 2xl:pt-60 pt-36 pb-16 bg-cover lg:px-5";
    $position = " col-start-1 col-end-7 lg:pr-12 lg:pl-8";
    $head_class = "  pb-6";
    $clip_path_class='';
    $cont_class=' relative z-10 ';
    @endphp
@elseif($background_type=='blue')
    @php 
    $image = " two-column-with-bg-image-blue-pattren-section text-white";
    $position = " col-start-1 col-end-7 lg:pr-12 lg:pl-8";
    $head_class = " pb-4";
    $clip_path_class='bg-overlay-clip-path 2xl:bg-bottom  lg:pt-20 lg:pb-44 bg-center 2xl:pb-52 bg-cover lg:px-5';
    $cont_class='';
    @endphp
@else
    @php 
    $image = "two-column-with-bg-image-no-pattren-section occupational-therapy-banner pt-40 pb-20 xl:pb-40 lg:pt-48 lg:pb-28 lg:bg-center 2xl:bg-bottom 2xl:pb-32 z-0 bg-cover lg:px-5 -mt-24 2xl:-mt-28";
    $position = "col-span-full col-start-6 lg:px-20";
    $head_class = " royal-blue-color pb-4";
    $clip_path_class='';
    $cont_class=' ';
    @endphp
@endif
@if($bg_image)
    <style>
        @if($background_type=='blue')
            #two-column-with-bg-image-section_{{ get_the_ID() }}_{{$key}} .two-col-inner {
                background-image: url({{$bg_image['url']}});
            }
        @else
            #two-column-with-bg-image-section_{{ get_the_ID() }}_{{$key}} {
                background-image: url({{$bg_image['url']}});
            }
        @endif
    </style>
@endif
@if($heading || $content || $background_type)
<section class="{{$image}} relative" id="two-column-with-bg-image-section_{{ get_the_ID() }}_{{$key}}">
    <div class="block lg:hidden">
        <img src="{{$bg_image['url']}}" alt="{{$bg_image['alt']}}">
    </div>
    <div class="two-col-inner relative {{$clip_path_class}} py-16 px-5">
        <div class="container mx-auto{{$cont_class}}">
            <div class="block lg:grid grid-cols-12">
                <div class="{{$position}}">
                    @if($heading)<{{$heading_type}} class="lg:text-40 text-32 lg:text-left font-montserrat uppercase font-bold {{$head_class}}">{!! $heading !!}</{{$heading_type}}>@endif
                        @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                </div>
            </div>
        </div>  
    </div>      
</section> 
@endif

