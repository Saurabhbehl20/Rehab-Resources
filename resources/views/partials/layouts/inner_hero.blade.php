@if(isset($hero_zone) && $hero_zone)
    @php
        $bg_image=$hero_zone['background_image'];
        $heading_type=$hero_zone['heading_type'];
        $heading=$hero_zone['heading'];
    @endphp
    @if($bg_image || $heading)
    @if($heading)
        @php $heading=$heading; @endphp
    @else
        @php $heading=get_the_title(); @endphp
    @endif
        @if($bg_image)
            <style>
                .inner-hero-section {
                    background-image:url({{$bg_image['url']}});
                }
            </style>
        @else
            <style>
                .inner-hero-section {
                    background-image:url({{get_template_directory_uri()}}/resources/images/Default-Template.jpg);
                }
            </style>
        @endif
        <section class="inner-hero-section relative mt-40 lg:mt-52 text-white py-28 lg:pt-44 lg:pb-36 bg-cover bg-bottom text-center z-10 lg:px-5">
            <div class="container mx-auto">
                @if($heading)<{{$heading_type}} class="z-10 relative text-32 lg:text-48 font-montserrat uppercase font-bold lg:px-5">{{ $heading }} </{{$heading_type}}>@endif
            </div>       
        </section> 
    @endif
@endif