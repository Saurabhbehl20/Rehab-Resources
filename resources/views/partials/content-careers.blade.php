@if(isset($career_intro_zone) && $career_intro_zone)
@if($career_intro_zone['top_content'] || $career_intro_zone['image'] || $career_intro_zone['left_content'])
<section class="full-width-section career-intro -mt-14 bg-cover bg-no-repeat text-center pt-32 pb-16 lg:pt-40 lg:pb-12 lg:px-5">
    <div class="container mx-auto">
        @if($career_intro_zone['top_content'])
        <div class="block lg:grid grid-cols-12">
            <div class="col-start-3 col-end-11">
                {!! $career_intro_zone['top_content'] !!}
            </div>
        </div>
        @endif
        @if($career_intro_zone['image'] || $career_intro_zone['left_content'])
        <div class="block lg:flex items-center mt-2 pb-12 flex-wrap lg:flex-nowrap lg:w-10/12 mx-auto">
            @if($career_intro_zone['image'])
            <div class="team-img order-2 lg:order-none lg:pr-7 lg:pl-12 lg:w-2/5 flex-shrink-0 flex flex-col">
                <img src="{{$career_intro_zone['image']['url']}}" class="relative" alt="{{$career_intro_zone['image']['alt']}}">
            </div>
            @endif
            @if($career_intro_zone['left_content'])
            <div class="team-content lg:pl-6 lg:pr-5 lg:flex-grow pt-4 text-center lg:text-left">
                @if($career_intro_zone['left_content'])<div class="wysiwig_content">{!! $career_intro_zone['left_content'] !!}</div>@endif
            </div>
            @endif
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if(isset($career_benefits_zone) && $career_benefits_zone)
@php 
    $heading = $career_benefits_zone['heading'];
    $heading_type = $career_benefits_zone['heading_type'];
    $content = $career_benefits_zone['content'];
    $benefits = $career_benefits_zone['benefits'];
@endphp
@if($heading || $benefits || $content)
<section class="careers-benefits-section benefits-section plain-pattern py-20 lg:py-28 bg-cover lg:px-5">
    <div class="container mx-auto">
        @if($heading || $content)
        <div class="block lg:grid grid-cols-12">
            <div class="col-start-3 col-end-11 pb-8 lg:pb-24 text-center">
                @if($heading)<{{$heading_type}} class="lg:text-40 royal-blue-color text-32 pb-5 font-montserrat uppercase font-bold">{!! $heading !!}</{{$heading_type}}>@endif
                @if($content)
                <div class="wysiwyg-content">
                    {!! $content !!}
                </div>
                @endif
            </div>            
        </div>
        @endif
        @if($benefits)
        <div class="block lg:grid grid-cols-3 mt-10 lg:mt-0 text-center lg:px-14 items-start">
            @foreach($benefits as $benefit)
            <div class="bg-white border-orange relative border-4 pb-7 mb-12 lg:mb-0 lg:m-5 px-9">
                @if($benefit['icon'])<img src="{{$benefit['icon']['url']}}" class="inline-block mx-auto my-7" alt="{{$benefit['icon']['alt']}}">@endif
                @if($benefit['heading'])<h2 class="pb-5 text-24 dark-navy-color font-bold">{!! $benefit['heading'] !!}</h2>@endif
                @if($benefit['content'])
                <div class="wysiwyg-content">
                    {!! $benefit['content'] !!}
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if(isset($career_position_zone) && $career_position_zone)
@if($career_position_zone['heading'] || $career_position_zone['content'] || $career_position_zone['positions'] || $career_position_zone['bottom_content'] || $career_position_zone['logo_text'] || $career_position_zone['logo'] )
<section class="accordion-zone pt-20 lg:pt-28 pb-4 bg-cover lg:px-5">
    <div class="container mx-auto">
        @if($career_position_zone['heading'] || $career_position_zone['content'])
        <div class="block text-white lg:grid grid-cols-12">
            <div class="col-start-3 col-end-11 text-center">
                @if($career_position_zone['heading'])<{{$career_position_zone['heading_type'] }} class="lg:text-40 text-32 pb-5 font-montserrat uppercase font-semibold">{!! $career_position_zone['heading'] !!}</{{$career_position_zone['heading_type']}}>@endif
                {!! $career_position_zone['content'] !!}
            </div>
        </div>
        @endif
        @if($career_position_zone['positions'])
            @php $i=0; @endphp
            <div class="accordion-wrapper">
            <script id="gnewtonjs" type="text/javascript" src="//recruitingbypaycor.com/career/iframe.action?clientId=8a7883d0784b99c7017889cc970f1a43"></script>
                {{--<div class="accordion-container" id="accordion">
                    <div class="block mt-12 lg:px-14">
                        @foreach($career_position_zone['positions'] as $positions)
                            @if($positions['heading'] || $positions['content'])
                                <div class="accordion-row">
                                    <button class="w-full border-b-2 py-4 pr-10 lg:pr-0 font-montserrat relative px-8 text-left text-16 lg:text-24 uppercase font-semibold bg-white accordion-title">{!! $positions['heading'] !!}</button>
                                        @if($positions['content'])
                                        <div class="panel py-5 lg:py-14 lg:px-5 accordion-content">
                                            <div class="block lg:grid grid-cols-3">
                                            @foreach($positions['content'] as $content)  
                                            @if($content['heading'] || $content['location'] || $content['link'] )
                                                <div class="bg-white mx-5 p-5 pb-14 lg:pb-3 mb-8 lg:mb-0" >
                                                    @if($content['heading'])<h2 class="pb-2 text-16 lg:text-24 dark-navy-color font-bold">{!! $content['heading'] !!}</h2>@endif
                                                    @if($content['location'])<p><i class="fas fa-map-marker-alt"></i> Barron</p>@endif
                                                    @if($content['link'])<a class="orange-color float-right" href="{{$content['link']['url']}}">{!! $content['link']['title'] !!}<i class="fas fa-long-arrow-alt-right"></i></a>@endif
                                                </div>
                                                @endif
                                            @endforeach  
                                            </div>
                                        </div>
                                        @endif
                                </div>  
                            @endif
                        @php $i++; @endphp
                        @endforeach              
                    </div>
                </div>--}}
            </div>
        @endif
        @if($career_position_zone['bottom_content'] || $career_position_zone['logo_text'] || $career_position_zone['logo'] )
        <div class="block lg:grid grid-cols-12 mt-16">
            <div class="col-start-4 col-end-10 text-center text-white">
                @if($career_position_zone['bottom_content'])<div class="wysiwig_content">{!! $career_position_zone['bottom_content'] !!}</div>@endif
                @if($career_position_zone['logo_text'])<p>{!! $career_position_zone['logo_text'] !!}</p>@endif
                @if($career_position_zone['logo'])<img src="{{$career_position_zone['logo']['url']}}" class="w-36 mt-2 mx-auto pb-10" alt="{{$career_position_zone['logo']['alt']}}">@endif
            </div>
        </div>
        @endif
    </div>
</section>
@endif
@endif
