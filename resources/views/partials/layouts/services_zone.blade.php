@php 

$heading = $layout['heading'];

$heading_type = $layout['heading_type'];

$content = $layout['content'];

$services = $layout['services'];

@endphp

@if($heading || $content || $services)
<section class="services-zone-section bg-cover pt-12 pb-10 lg:pb-2 bg-center lg:px-5" id="services-zone_{{ get_the_ID() }}_{{$key}}">
    <div class="container mx-auto">
        @if($heading || $content)
        <div class="text-center pt-8 lg:pt-20">
            @if($heading)<{{$heading_type}} class="z-10 relative text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5 pb-5">{!! $heading !!} </{{$heading_type}}@endif
            @if($content)<div class="wysiwig_content"><p>{!! $content !!}</p></div>@endif
        </div> 
        @endif
        @if($services)
        <div class="block lg:grid grid-cols-2 mt-20 lg:mt-20 items-center lg:mx-auto lg:w-3/5 mb-16 items-stretch">
            @foreach($services as $service)
            @if($service['icon'] || $service['heading'] || $service['content'])
            <div class="impacts-inner-col bg-white border-orange text-center border-4 pb-7 px-8 lg:m-5 mb-20 lg:mb-4">
                @if($service['icon'])<img src="{{$service['icon']['url']}}" class="w-20 lg:w-28 -mt-12 lg:-mt-16 mx-auto" alt="{{$service['icon']['alt']}}">@endif
                @if($service['heading'])<h2 class="pb-4 capitalize text-16 lg:text-24 royal-blue-color font-semibold">{!! $service['heading'] !!}</h2>@endif
                @if($service['content'])<p>{!! $service['content'] !!}</p>@endif
            </div>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif