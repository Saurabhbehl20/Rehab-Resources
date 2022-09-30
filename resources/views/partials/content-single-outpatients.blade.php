@php
    $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true );

@endphp
<section class="two-column-content-section bg-cover py-12 lg:px-5 lg:mt-52 lg:pt-36 pt-16 pb-20 mt-24">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-2 items-center lg:w-10/12 mx-auto">
            @if(has_post_thumbnail())
            <div class="team-img order-2 lg:order-none">
                <img src="{{get_the_post_thumbnail_url()}}" class="relative" alt="{{$alt}}">
            </div>
            @endif
            <div class="location-content lg:pl-14 pt-4 text-center lg:text-left">
                <h2 class="lg:text-40 text-32 font-montserrat royal-blue-color uppercase font-bold pb-4">{{the_title()}}</h2>
                @if(get_field('address'))<p><i class="fas fa-map-marker-alt"></i>{!! the_field('address') !!}</p>@endif
                @if(get_field('contact_number'))<p><i class="fas fa-phone-alt"></i><a href="tel:{!! the_field('contact_number') !!}">{!! the_field('contact_number') !!}</a></p>@endif
                @if(get_field('contact_number_2'))<p><i class="fas fa-fax"></i><a href="fax:{!! the_field('contact_number_2') !!}">{!! the_field('contact_number_2') !!}</a></p>@endif
                @if(get_field('email'))<p><i class="fas fa-envelope"></i><a href="mailto:{!! the_field('email') !!}"> {!! the_field('email') !!}</a></p>@endif
            </div>
        </div>
    </div>       
</section>
@if(isset($map) &&  $map)
<section class="map-location-section">
    {!! $map !!}
</section>
@endif
@if(isset($services_zone) && $services_zone )
@if($services_zone['heading'] || $services_zone['content'] ||  $services_zone['services'] )
<section class="three-column-content-section py-20 lg:py-28 bg-cover lg:px-5">
    <div class="container mx-auto">
        @if($services_zone['heading'] || $services_zone['content'])
        <div class="pb-8 lg:pb-24 text-white text-center">
            @if($services_zone['heading'])<{{$services_zone['heading_type']}} class="lg:text-40 text-32 pb-5 font-montserrat uppercase font-bold">{!! $services_zone['heading'] !!}</{{$services_zone['heading_type']}}>@endif
            @if($services_zone['content'])<div class="wysiwig_content">{!! $services_zone['content'] !!}</div>@endif
        </div>
        @endif
        @if($services_zone['services'] )
        <div class="block lg:grid grid-cols-3 mt-20 lg:mt-0 text-center lg:px-14">
            @foreach($services_zone['services'] as $services)
            @if($services['icon'] || $services['heading'] || $services['content'])
            <div class="bg-white pb-7 mb-24 lg:mb-0 lg:m-5 px-9">
                @if($services['icon'])<img src="{{$services['icon']['url']}}" class="-mt-16 inline-block mx-auto" alt="{{$services['icon']['alt']}}">@endif
                @if($services['heading'])<h2 class="pb-5 pt-1 text-24 dark-navy-color font-bold">{!! $services['heading'] !!}</h2>@endif
                @if($services['content'])<div class="wysiwig_content"><p>{!! $services['content'] !!}</p></div>@endif
            </div>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif