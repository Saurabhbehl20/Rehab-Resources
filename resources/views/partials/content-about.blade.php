@if($about_intro)
    <section class="about_intro_zone -mt-14 bg-contain 2xl:bg-cover bg-no-repeat pt-32 pb-24 lg:pt-40 lg:pb-12 lg:px-5 bg-white" id="about_intro_zone">
        <div class="container mx-auto">
            @foreach($about_intro as $content)
                @php 
                $heading=$content['heading'];
                $heading_type=$content['heading_type'];
                $sub_heading=$content['sub_heading'];
                $content=$content['content'];
                @endphp
                @if($heading || $sub_heading || $content)
                    <div class="block lg:grid grid-cols-12">
                        <div class="col-start-3 col-end-11">
                            @if($heading)<{{$heading_type}} class="z-10 relative text-center text-32 lg:text-40 font-montserrat uppercase font-bold lg:px-5 orange-color">{{ $heading }} </{{$heading_type}}>@endif
                            @if($sub_heading)<h2 class="z-10 relative text-center text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5 pb-5">{{$sub_heading}}</h2>@endif
                            @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endif
@php
$image=$about_two_column_content['image'];
$heading=$about_two_column_content['heading'];
$heading_type=$about_two_column_content['heading_type'];
$sub_heading=$about_two_column_content['sub_heading'];
$content=$about_two_column_content['content'];
@endphp
@if($image || $heading || $sub_heading || $content)
    <section class="about_section bg-cover bg-center pb-48 lg:pb-20 lg:pr-5">
        <div class="container sm:mx-auto lg:ml-0 mr-auto">
            <div class="block lg:grid grid-cols-2 items-center">
                <div class="about-img xl:pr-20 lg:pr-5">
                    @if($image)
                        <img src="{{$image['url']}}" class="z-10 lg:object-cover lg:h-full relative bottom-14 lg:bottom-0 lg:-my-16" alt="{{$image['alt']}}">
                    @endif;
                </div>
                <div class="about-content xl:pr-12 lg:py-16 lg:pl-8 xl:pl-0 xl:py-0">
                    @if($heading)
                        <{{$heading_type}} class="z-10 relative text-32 lg:text-40 font-montserrat uppercase orange-color font-bold">{{$heading}}  </{{$heading_type}}>
                    @endif
                    @if($sub_heading)
                        <h2 class="z-10 relative text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold pb-7">{{$sub_heading}}</h2>
                    @endif
                    @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                </div>
            </div>
        </div>
    </section>
@endif;
@php 
$heading=$about_full_width_content['heading'];
$heading_type=$about_full_width_content['heading_type'];
$sub_heading=$about_full_width_content['sub_heading'];
$content=$about_full_width_content['content'];
@endphp
@if($heading || $sub_heading || $content)
    <section class="about_full_width_zone -mt-56 lg:-mt-48 bg-cover text-white pt-48 pb-16 lg:pb-24 lg:pt-44 lg:px-5 2xl:pt-56" id="about_full_width_zone_{{get_the_ID()}}">
        <div class="container mx-auto">
            <div class="block lg:grid grid-cols-12">
                <div class="col-start-3 col-end-11">
                    @if($heading)<{{$heading_type}} class="z-10 relative text-center text-32 lg:text-40 font-montserrat uppercase font-bold lg:px-5">{{ $heading }} </{{$heading_type}}>@endif
                    @if($sub_heading)<h2 class="z-10 relative text-center text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold pb-7">{{$sub_heading}}</h2>@endif
                    @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
                </div>
            </div>
        </div>
    </section>
@endif