@php
$bg_type=$layout['background_type'];
$offset=$layout['offset'];
$heading=$layout['heading'];
$heading_type=$layout['heading_type'];
$content=$layout['content'];
$col_class='';
$bg_type_class='';
$section_class='';

@endphp
@if($offset)
    @php $col_class='col-start-4 col-end-10'; @endphp
@else
    @php $col_class='col-start-3 col-end-11';  @endphp
@endif


@if($key==0 && get_the_ID()!=247 && get_the_ID()!=249)
    @php $section_class=' -mt-16 pt-48'; @endphp
@elseif((get_the_ID()==247 || get_the_ID()==249) && $key==0)
    @php $section_class=' mt-16 lg:pt-48 pt-40'; @endphp
@else
    @php $section_class='  pt-10';  @endphp
@endif



@if($heading || $content)
    @if($bg_type=='white-pattern-circle')
        @php $bg_type_class=' full-white-pattern-circle'; @endphp
    @elseif($bg_type=='white-pattern-double-circle')
        @php $bg_type_class=' full-white-pattern-double-circle'; @endphp
    @elseif($bg_type == 'double-circles-with-icons')
        @php  $bg_type_class = ' bg-center double-circles-with-icons' @endphp
    @else    
        @php $bg_type_class=''; @endphp
    @endif
    <section class="full-width-section pb-24 lg:px-5{{$bg_type_class}}{{$section_class}} bg-cover" id="full-width-section_{{ get_the_ID() }}_{{$key}}">
        <div class="container mx-auto">
            <div class="block lg:grid grid-cols-12">
                <div class="{{$col_class}}">
                    @if($heading)<{{$heading_type}} class="lg:text-40 text-32 font-montserrat royal-blue-color uppercase font-bold pb-3 text-center">{{$heading}}</{{$heading_type}}>@endif
                    @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                </div>
            </div>
        </div>
    </section>
@endif