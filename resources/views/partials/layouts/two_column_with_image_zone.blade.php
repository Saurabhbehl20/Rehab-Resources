@php
    $bg_type=$layout['background_type'];
    $image=$layout['image'];
    $offset=$layout['offset'];
    $heading_type=$layout['heading_type'];
    $heading=$layout['heading'];
    $content=$layout['content'];
    $list_type=$layout['list_type'];
    $single_column=$layout['single_column'];
    $l_list_content=$layout['left_list_content'];
    $r_list_content=$layout['right_list_content'];
    $bg_class='';
    $heading_class='';
    $color_class='';
    $offset_class='';
    $col_img_class='';
    $col_content_class='';
    $img_margin_class='';
    $section_margin = '';
@endphp
@if($bg_type=='orange')
    @php $bg_class=' bg_orange_pattern'; $color_class=' text-white'; $heading_color = ""; $section_class = 'bg-center '; @endphp
@elseif($bg_type=='orange-yellow-pattern')
    @php $bg_class=' bg_orange_yellow_pattern yellow-icon before-icon-up'; $color_class=' text-white'; $heading_color = ""; $section_class = 'bg-center '; @endphp
@elseif($bg_type=='orange-red-pattern')
    @php $bg_class=' bg_orange_red_pattern'; $color_class=' text-white'; $heading_color = ""; $section_class = 'bg-center '; @endphp
@elseif($bg_type=='white-with-double-circle')
    @php $bg_class = ' white_with_double_circle' ; $heading_color = 'royal-blue-color'; $section_class = 'bg-bottom '; @endphp
@elseif($bg_type=='orange-single-circle')
    @php $bg_class = ' orange_with_single_circle' ; $color_class=' text-white'; $heading_color = ""; $section_class = 'bg-center '; @endphp
@else
    @php $bg_class=' bg_white_pattern'; $color_class=''; $heading_color = "royal-blue-color"; $section_class = 'bg-bottom '; @endphp
@endif

@if($offset)
    @php $offset_class='block lg:grid grid-cols-2 items-center lg:mx-auto lg:w-5/6'; $col_img_class=' lg:pr-5'; $col_content_class=' xxl:py-16 lg:pl-8'; @endphp
@else
    @php $offset_class='block lg:flex items-center flex-wrap lg:flex-nowrap'; $col_img_class=' lg:pr-5 lg:w-2/5 flex-shrink-0 flex flex-col'; $col_content_class=' xxl:py-16 lg:px-16 lg:pt-8 lg:pb-4 xl:py-0 lg:flex-grow'; @endphp
@endif


@if($key!=0)
    @php $img_margin_class='xl:-my-28'; @endphp
@elseif($key==0)
    @php  $section_margin = ' -mt-14 pt-28' @endphp
@endif

@if($image || $heading || $content || $single_column || $l_list_content || $r_list_content)
    <section class="two-column-content-section bg-cover {{$section_class}} lg:py-10{{$bg_class}}{{$color_class}} {{$section_margin}}" id="two-column-image-section_{{ get_the_ID() }}_{{$key}}">
        <div class="container mx-auto relative">
            <div class="{{$offset_class}}">
                <div class="welcome-img{{$col_img_class}} z-10">
                    @if($image)<img src="{{$image['url']}}" class="lg:object-cover lg:h-full relative bottom-14 lg:bottom-0 lg:-my-8 {{$img_margin_class}}" alt="{{$image['alt']}}">@endif
                </div>
                <div class="welcome-content{{$col_content_class}} pb-16">
                    @if($heading)<{{$heading_type}} class="lg:text-40 text-32 text-center lg:text-left font-montserrat uppercase font-bold pb-6 {{$heading_color}}">{{$heading}}</{{$heading_type}}>@endif
                    @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                    @if($single_column && $list_type=='single-column')
                        <div class="wysiwig_single_lists">{!! $single_column !!}</div>
                    @endif
                    @if($list_type=='two-column')
                        @if($l_list_content || $r_list_content)
                            <div class="block lg:grid grid-cols-2 items-baseline mt-16 lg:mt-10 items-center wysiwig_double_lists check-list ml-7">
                                {!! $l_list_content !!}
                                {!! $r_list_content !!}
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif