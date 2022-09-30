@if(isset($hero_zone) && $hero_zone)
<section class="hero-section text-white text-center z-10 pt-40 lg:pt-52" >
    <div class="carousel slide">
        @php $j=1 @endphp
        @foreach($hero_zone as $banner)
            
            @if($banner['hero_image'])
                <style>
                        .hero-section .carousel-inner-{{$j}} {
                            background-image: url('{{$banner['hero_image']['url']}}');
                        }
                </style>
            @endif
            @php $j++ @endphp
        @endforeach
        <div class="hero-responsive">
           @php $i=1 @endphp
            @foreach($hero_zone as $banner)
            <div class="carousel-inner bg-cover bg-center pt-28 pb-36 lg:py-48 xl:py-56 2xl:py-96 carousel-inner-{{$i}}">
                @if($banner['heading'])
                    <{{$banner['heading_type'] }} class="z-10 relative text-32 lg:text-56 font-montserrat uppercase font-bold lg:px-5">{!! $banner['heading'] !!}</{{$banner['heading']}}>
                @endif
                @if($banner['content'])
                    <h2 class="z-10 py-6 relative text-16 lg:text-32 lg:px-5">{{$banner['content']}}</h2>
                @endif
                @if($banner['link'])
                <a class="z-10 mt-4 text-xl lg:text-24 relative hover:bg-dark-navy bg-dark-orange" href="{{$banner['link']['url']}}" target="{{$banner['link']['target']}}">{{$banner['link']['title']}}</a>
                @endif
            </div>
            @php $i++ @endphp
            @endforeach
        </div>
    </div> 
</section> 
@endif
@if(isset($annual_impact_zone) && $annual_impact_zone)
@if( (isset($annual_impact_zone['heading']) && $annual_impact_zone['heading']) || (isset($annual_impact_zone['columns']['icon']) && $annual_impact_zone['columns']['icon']) || (isset($annual_impact_zone['columns']['heading'] ) && $annual_impact_zone['columns']['heading']) || isset($annual_impact_zone['columns']['subheading']) && $annual_impact_zone['columns']['subheading'])
    <section class="annual-impacts-section bg-cover bg-center pt-24 lg:pt-52 xl:pt-56 pb-10 lg:pb-8 -mt-16 lg:-mt-40 lg:px-5">
        <div class="container mx-auto">
            <div class="pb-20 lg:pb-14 text-center"> 
                @if($annual_impact_zone['heading'])
                <{{$annual_impact_zone['heading_type']}} class="lg:text-40 text-32 font-montserrat royal-blue-color uppercase font-bold">{!! $annual_impact_zone['heading'] !!}</{{$annual_impact_zone['heading_type']}}>
                @endif
            </div>
            <div class="block lg:grid grid-cols-3 lg:pt-3 impacts-inner-row lg:px-14 lg:pb-18">
                @if($annual_impact_zone['columns'])
                @php $columns = $annual_impact_zone['columns'] @endphp
                @foreach($columns as $column)
                <div class="impacts-inner-col bg-white border-orange text-center border-4 pb-7 lg:m-5 mb-20 lg:mb-28">
                    @if($column['icon'])
                        <img src="{{$column['icon']['url']}}" class="w-20 lg:w-28 -mt-12 lg:-mt-16 mx-auto" alt="{{$column['icon']['alt']}}">
                    @endif
                    @if($column['heading'])
                        <{{$column['heading_type']}} class="pb-1 text-28 lg:text-35 font-montserrat royal-blue-color font-semibold">{{$column['heading']}}</{{$column['heading_type']}}>
                    @endif
                    @if($column['subheading'])
                    <h3 class="text-16 lg:text-24">{{$column['subheading']}}</h3>
                    @endif
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
@endif
@endif
@if(isset($two_column_zone_left_image) && $two_column_zone_left_image)
    @if( (isset($two_column_zone_left_image['image']) && $two_column_zone_left_image['image']) || (isset($two_column_zone_left_image['heading']) && $two_column_zone_left_image['heading']) || (isset($two_column_zone_left_image['content']) && $two_column_zone_left_image['content']))
    <section class="welcome-section bg-cover bg-center pb-24 lg:pb-0 lg:px-5">
        <div class="container mx-auto">
            <div class="block lg:grid grid-cols-2 items-center">
                @if($two_column_zone_left_image['image'])
                <div class="welcome-img xl:pr-20 lg:pr-5">
                    <img src="{{$two_column_zone_left_image['image']['url']}}" width="{{$two_column_zone_left_image['image']['width']}}" height="{{$two_column_zone_left_image['image']['height']}}" class="z-10 lg:object-cover lg:h-full relative bottom-14 lg:bottom-0 lg:-my-16" alt="{{$two_column_zone_left_image['image']['alt']}}">
                </div>
                @endif
                <div class="welcome-content xl:pr-12 lg:py-16 lg:pl-8 xl:pl-0 xl:py-0">
                    @if($two_column_zone_left_image['heading'])
                    <{{$two_column_zone_left_image['heading_type']}} class="lg:text-40 text-32 text-center lg:text-left font-montserrat royal-blue-color uppercase font-bold pb-6">{!! $two_column_zone_left_image['heading'] !!}</{{$two_column_zone_left_image['heading_type']}}>
                    @endif
                        @if($two_column_zone_left_image['content'])<div class="wysiwig_content">{!! $two_column_zone_left_image['content'] !!}</div>@endif
                </div>
            </div>
        </div>
    </section>
    @endif
@endif
@if(isset($therapy_zone) && $therapy_zone)
    @if( (isset($therapy_zone['heading']) && $therapy_zone['heading']) || (isset($therapy_zone['columns']['icon']) && $therapy_zone['columns']['icon']) ||
    (isset($therapy_zone['columns']['heading']) && $therapy_zone['columns']['heading']) || (isset($therapy_zone['columns']['content']) && $therapy_zone['columns']['content']))
        <section class="therapy-provision-section z-10 pt-20 pb-36 lg:pb-40 lg:py-32 bg-cover bg-center lg:px-5">
            <div class="container mx-auto">
                @if(isset($therapy_zone['heading']) && $therapy_zone['heading'])
                    <div class="pb-8 lg:pb-32 text-center">
                        <{{$therapy_zone['heading_type']}} class="lg:text-40 text-32 text-white font-montserrat uppercase font-bold">{!! $therapy_zone['heading'] !!}</h2>
                    </div>
                @endif
                @php  $columns = $therapy_zone['columns'] @endphp
                @if($columns)
                <div class="lg:grid grid-cols-3 px-14 hidden">  
                    @foreach($columns as $column)
                        @if($column['icon'] || $column['heading'] || $column['content'])
                        <div class="bg-white border-blue border-2 pb-7 lg:m-5 px-9">
                            @if($column['icon'])
                                <img src="{{$column['icon']['url']}}" class="-mt-24 mx-auto" alt="{{$column['icon']['alt']}}">
                            @endif
                            @if($column['heading'])
                                <h2 class="pb-2 text-24 dark-navy-color font-bold">{!! $column['heading'] !!}</h2>
                            @endif
                                @if($column['content'])<div class="wysiwig_content"><p>{!! $column['content'] !!}</p></div>@endif
                        </div>
                        @endif
                    @endforeach
                </div>  
                <div class="therapy-slide mt-14 text-white text-center lg:w-4/5 mx-auto lg:hidden">
                    @foreach($columns as $column)
                        @if($column['icon'] || $column['heading'] || $column['content'])
                        <div class="carousel-inner">
                            <div class="bg-white border-blue border-2 pb-7 m-5 px-8">
                            @if($column['icon'])
                                <img src="{{$column['icon']['url']}}" class="w-28 lg:w-full -mt-16 lg:-mt-24 mx-auto" alt="{{$column['icon']['alt']}}">
                            @endif
                            @if($column['heading'])
                                <h2 class="pb-3 text-24 dark-navy-color font-bold">{!! $column['heading'] !!}</h2>
                            @endif
                                @if($column['content'])<div class="wysiwig_content"><p>{!! $column['content'] !!}</p></div>@endif
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endif
            </div>
        </section>
    @endif
@endif
@if(isset($services_zone) && $services_zone)
    @if($services_zone['heading'] || $services_zone['services'])
    <section class="services-options-section py-40 lg:py-52 -mt-28 bg-cover lg:px-5">
        <div class="container mx-auto">
            @if($services_zone['heading'])
            <div class="pb-20 text-center">
                <{{$services_zone['heading_type']}} class="lg:text-40 text-32 royal-blue-color font-montserrat uppercase font-bold">{!! $services_zone['heading'] !!}</$services_zone['heading_type']>
            </div>
            @endif
            @if($services_zone['services'])
            @php 
            $services_cols=$services_zone['services'];
            $total=count($services_cols);
            $t_rem=$total%3;
            $i=0;
            $class =" ";
            @endphp
            <div class="lg:grid grid-cols-12 gap-12 hidden px-10">
                @foreach($services_zone['services'] as $section)
                @if($t_rem == 1 && $i==$total-1)
                @php $class = "col-start-4"; @endphp
                @elseif($t_rem == 2 && $i==$total-2)
                    @php $class = "col-start-3";  @endphp
                @else
                @php $class = " " @endphp
                @endif
                    @if($section['icon'] || $section['heading']  || $section['content'] )
                    <div class="trapezium text-white text-center mt-14 pb-4  px-1 col-span-4 {{$class}}">
                        @if($section['icon'])<img src="{{$section['icon']['url']}}" class="-mt-16 mx-auto" alt="{{$section['icon']['alt']}}">@endif
                        @if($section['heading'])<h2 class="pb-2 text-24 font-bold">{!! $section['heading'] !!}</h2>@endif
                        {!! $section['content'] !!}
                    </div>
                    @endif
                    @php $i++ @endphp
                @endforeach
            </div>
            @endif
            @if($services_zone['services'])
            <div class="services-options text-white lg:w-4/5 mx-auto block lg:hidden">
                @foreach($services_zone['services'] as $section)
                @if($section['icon'] || $section['heading']  || $section['content'] )
                <div class="carousel-inner">
                    <div class="trapezium text-white text-center pb-4 px-1">
                    @if($section['icon'])<img src="{{$section['icon']['url']}}" class="-mb-14 lg:-mb-0 relative bottom-14 lg:bottom-0 w-32 lg:w-full lg:-mt-14 mx-auto" alt="{{$section['icon']['alt']}}">@endif
                    @if($section['heading'])<h2 class="pb-2 text-xl lg:text-24 font-bold">{!! $section['heading'] !!}</h2>@endif
                        @if($section['content'])<div class="wysiwig_content">{!! $section['content'] !!}</div>@endif
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endif
        </div>
    </section>
    @endif
@endif
@if(isset($two_column_zone_right_image) && $two_column_zone_right_image)
@if($two_column_zone_right_image['image'] ||  $two_column_zone_right_image['heading'] || $two_column_zone_right_image['subheading'] || $two_column_zone_right_image['content'] || $two_column_zone_right_image['link'] )
<section class="why-rehab-section bg-cover pt-24 lg:pt-0">
    <div class="container sm:mx-auto lg:mr-0 ml-auto">
        <div class="block lg:grid grid-cols-2 items-center text-center lg:text-left">
            @if($two_column_zone_right_image['heading'] || $two_column_zone_right_image['subheading'] || $two_column_zone_right_image['content'] || $two_column_zone_right_image['link'] )
            <div class="whyrehab-content lg:py-16 lg:pl-8 xl:pl-0 xl:py-0 z-10 relative">
                @if($two_column_zone_right_image['heading'])
                <{{$two_column_zone_right_image['heading_type']}} class="lg:text-40 text-32 text-center lg:text-left font-montserrat royal-blue-color uppercase font-bold pb-4">{!! $two_column_zone_right_image['heading'] !!}</{{$two_column_zone_right_image['heading_type']}}>
                @endif
                @if($two_column_zone_right_image['subheading'])
                <h3 class="lg:text-24 text-xl  text-center lg:text-left royal-blue-color font-medium pb-10 pt-6 lg:pt-0 lg:pb-4">{!! $two_column_zone_right_image['subheading'] !!}</h3>
                @endif
                    @if($two_column_zone_right_image['content'])<div class="wysiwig_content">{!! $two_column_zone_right_image['content'] !!}</div>@endif
                @if($two_column_zone_right_image['link'] )
                <a class="text-16 uppercase inline-block bg-dark-navy hover:bg-dark-orange text-white font-bold py-3 px-8 mt-8" href="{{$two_column_zone_right_image['link']['url']}}" target="{{$two_column_zone_right_image['link']['target']}}">{{$two_column_zone_right_image['link']['title']}}</a>
                @endif
            </div>
            @endif
            @if($two_column_zone_right_image['image'])
            <div class="relative pt-10 lg:pt-0">
                <div class="welcome-img z-10">
                    <img src="{{$two_column_zone_right_image['image']['url']}}" width="{{$two_column_zone_right_image['image']['width']}}" height="{{$two_column_zone_right_image['image']['height']}}" class="z-20 lg:object-cover relative bottom-14 lg:bottom-0 lg:-my-48 -mb-32" alt="{{$two_column_zone_right_image['image']['alt']}}">
                </div>
            </div>
            @endif
        </div> 
    </div>
</section>
@endif
@endif

@if(isset($leadership_zone) && $leadership_zone)
@if($leadership_zone['heading'] || $leadership_zone['content'] || $leadership_zone['subheading'] || $leadership_zone['link'])
<section class="leadership-section text-center z-10 lg:z-auto relative bg-cover bg-center 2xl:bg-bottom text-white pt-24 pb-32 lg:pb-20">
    <div class="container mx-auto">
        <div class="welcome-content  lg:w-3/5 mx-auto lg:py-16 lg:pl-8 xl:pl-0 xl:py-0">
            
            @if($leadership_zone['heading'])<{{$leadership_zone['heading_type']}} class="lg:text-40 text-32 font-montserrat uppercase font-bold pb-6">{!! $leadership_zone['heading'] !!}</{{$leadership_zone['heading_type']}}>@endif
            @if($leadership_zone['subheading'])<h3 class="lg:text-24 text-xl font-medium pb-6">{!! $leadership_zone['subheading'] !!}</h3>@endif
            @if($leadership_zone['content'])<div class="wysiwig_content">{!! $leadership_zone['content'] !!}</div>@endif
            @if($leadership_zone['link'])<a class="text-16 uppercase inline-block hover:text-white font-inter bg-white hover:bg-royal-blue royal-blue-color font-bold py-3 px-8 mt-16" href="{{$leadership_zone['link']['url']}}" target="{{$leadership_zone['link']['target']}}">{{$leadership_zone['link']['title']}}</a>@endif
        </div>
    </div>
</section>
@endif
@endif

@if(isset($team_zone) && $team_zone)
@if($team_zone['image'] || $team_zone['heading'] || $team_zone['subheading'] || $team_zone['content'] || $team_zone['link'] )
<section class="join-us-section bg-cover pt-24 z-0 lg:z-auto bg-center -mt-16 lg:-mt-0 lg:pt-0 lg:pb-0 lg:px-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
            @if($team_zone['image'] )
            <div class="welcome-img order-2 lg:order-none xl:px-20 lg:px-5">
                <img src="{{$team_zone['image']['url']}}" width="{{$team_zone['image']['width']}}" height="{{$team_zone['image']['height']}}" class="z-10 lg:object-cover lg:h-full relative -bottom-12 lg:bottom-0 lg:-mt-16 2xl:mt-4 lg:-mb-40" alt="{{$team_zone['image']['alt']}}">
            </div>
            @endif
            @if($team_zone['heading'] || $team_zone['subheading'] || $team_zone['content'] || $team_zone['link'])
            <div class="welcome-content lg:py-16 lg:pl-8 xl:py-0 text-center lg:text-left">
                @if($team_zone['heading'])
                    <{{$team_zone['heading_type']}} class="lg:text-40 text-32 text-center lg:text-left font-montserrat royal-blue-color uppercase font-bold pb-6">{!! $team_zone['heading'] !!}</$team_zone['heading_type']>
                @endif
                @if($team_zone['subheading'])<h3 class="lg:text-24 text-xl  text-center lg:text-left royal-blue-color font-medium pb-8 lg:pb-4">{!! $team_zone['subheading'] !!}</h3>@endif
                @if($team_zone['content'])<div class="wysiwig_content">{!! $team_zone['content'] !!}</div>@endif
                @if($team_zone['link'])<a class="text-16 uppercase inline-block bg-dark-navy hover:bg-dark-orange text-white font-bold py-3 px-8 mt-4" href="{{$team_zone['link']['url']}}" target="{{$team_zone['link']['target']}}">{{$team_zone['link']['title']}}</a>@endif
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif

@if(isset($testimonial_zone) && $testimonial_zone)
@if($testimonial_zone['heading'] || $testimonial_zone['testimonial'])
<section class="testimonials-section pt-32 lg:pt-48 pb-14 overflow-hidden bg-cover bg-center">
    @if($testimonial_zone['heading'])
    <{{$testimonial_zone['heading_type']}} class="text-center lg:text-40 text-32 text-white font-montserrat uppercase font-bold pb-12 lg:pb-20">{!! $testimonial_zone['heading'] !!}</{{$testimonial_zone['heading_type']}}>
    @endif

    @if($testimonial_zone['testimonial'])
    <div class="testimonial-slider">
        @foreach($testimonial_zone['testimonial'] as $testimonial)
        <div class="relative bg-white pb-7">
            @if($testimonial['icon'])
            <img src="{{$testimonial['icon']['url']}}" class="absolute inset-x-0 -top-8 lg:-top-12 w-20 lg:w-32 mx-auto" alt="{{$testimonial['icon']['alt']}}">
            @endif
            @if($testimonial['content'])
            <p class="relative quote-img text-xs md:text-16 text-black  mt-2.5 lg:mt-0 pt-16 lg:pt-28 px-8 md:px-12 mx-0.5">{!! $testimonial['content'] !!}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif
</section>
@endif
@endif

