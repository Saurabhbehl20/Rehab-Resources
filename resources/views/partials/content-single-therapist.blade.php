@if(has_post_thumbnail())
    @php $img = get_the_post_thumbnail_url() ; 
    $alt = get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt', true) ;
    @endphp
@else
    @php $img = get_template_directory_uri().'../resources/images/user-image.jpg'; 
    $alt = the_title(); @endphp
@endif
    
<section class="about-team-section bg-contain 2xl:bg-cover bg-bottom bg-no-repeat pt-12 lg:px-5 pb-24 mt-40 lg:mt-52">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-2 items-center lg:w-10/12 mx-auto">
            <div class="team-img order-2 lg:order-none">
                <img src="{{$img}}" class="relative" alt="{{$alt}}">
            </div>
            <div class="team-content lg:pl-8 pt-4 text-center lg:text-left">
                <h2 class="lg:text-40 text-32 font-montserrat royal-blue-color uppercase font-bold pb-3">{{the_title()}}</h2>
                @if(get_field('position'))<h3 class="orange-color pb-5 text-24 font-medium">{!! the_field('position') !!}</h3>@endif
                {!! the_field('content') !!}
            </div>
        </div>
        <div class="block lg:grid grid-cols-12 pt-10">
            <div class="col-start-3 col-end-11">
                <div class="wysiwyg">
                    @if(get_the_content())<div class="wysiwig_content">{!! the_content() !!}</div>@endif
                </div>
            </div>
        </div>
    </div>       
</section> 
@if(isset($services_zone) && $services_zone)
@if($services_zone['heading'] || $services_zone['content'] || $services_zone['services'])
<section class="services-offered-section z-10 pt-20 pb-24 lg:pt-32 bg-cover lg:px-5">
    <div class="container mx-auto">
         @if($services_zone['heading'] || $services_zone['content'])
        <div class="pb-8 lg:pb-24 text-white text-center">
         @if($services_zone['heading'])<{{$services_zone['heading_type']}} class="lg:text-40 text-32 pb-5 font-montserrat uppercase font-bold">{!! $services_zone['heading'] !!}</{{$services_zone['heading_type']}}>@endif
         @if($services_zone['content'])<div class="wysiwig_content">{!! $services_zone['content'] !!}</div>@endif
        </div>
        @endif
        @if($services_zone['services'])
        <div class="block lg:grid grid-cols-3 mt-20 lg:mt-0 text-center lg:px-14">
            @foreach($services_zone['services'] as $services)
            @if($services['icon'] || $services['heading'] || $services['content'])
            <div class="bg-white pb-7 mb-24 lg:mb-0 lg:m-5 px-9">
            @if($services['icon'])<img src="{{$services['icon']['url']}}" class="-mt-16 inline-block mx-auto" alt="{{$services['icon']['alt']}}">@endif
                @if($services['heading'])<h2 class="pb-5 pt-1 text-24 dark-navy-color font-bold">{!! $services['heading'] !!}</h2>@endif
                @if($services['content'])<p>{!! $services['content'] !!}</p>@endif
            </div>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if(isset($education_zone) && $education_zone)
@if($education_zone['heading'] || $education_zone['left_column'] || $education_zone['right_column'] )
<section class="list-section no-image py-20 lg:px-5">
    <div class="container mx-auto relative">
        @if($education_zone['heading'])
        <div class="block text-center">
            <h2 class="text-center text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5">{!! $education_zone['heading'] !!}</h2>
        </div>
        @endif
        @if($education_zone['left_column'] || $education_zone['right_column'])
        <div class="certifications-list relative block lg:grid grid-cols-2 mt-16 items-center lg:mx-auto lg:w-4/5">
            @if($education_zone['left_column'])
            <div class="check-list">
                {!! $education_zone['left_column'] !!}
            </div>
            @endif
            @if($education_zone['right_column'])
            <div class="lg:pl-8 check-list">
               {!! $education_zone['right_column'] !!}
            </div>
            @endif
        </div>
        @endif
    </div>
</section>
@endif
@endif