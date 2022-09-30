@if(isset($leadership_zone) && $leadership_zone)
    @if($leadership_zone['heading'] || $leadership_zone['leaders']) 
        <div class="about-team-section-main bg-contain 2xl:bg-cover bg-no-repeat lg:-mt-20 lg:pt-20">
            @php $i = 0 @endphp
            @foreach($leadership_zone['leaders'] as $leaders)

                @if($leaders['image_position'] == 'left')
                    @php $class=" "  @endphp
                @else
                    @php $class = " flex-row-reverse" @endphp
                @endif

                @if($i==0)
                    @php $section_padding = "pt-20" @endphp
                @else
                    @php $section_padding = " " @endphp
                @endif
                
                <section class="about-team-section bg-cover lg:px-5 {{$section_padding}}">
                    <div class="container mx-auto">
                        @if($i==0)
                        <div class="block text-center">
                            <{{$leadership_zone['heading_type']}} class="z-10 relative text-center text-32 lg:text-40 font-montserrat uppercase royal-blue-color font-bold lg:px-5">{!! $leadership_zone['heading'] !!}</$leadership_zone['heading_type']>
                        </div>
                        @endif

                        <div class="block lg:flex items-center mt-12 lg:mt-24 flex-wrap lg:flex-nowrap lg:w-10/12 mx-auto {{$class}}">
                            <div class="team-img order-2 lg:order-none lg:pr-7 lg:pl-5 lg:w-2/5 flex-shrink-0 flex flex-col">
                                @if($leaders['image'])<img src="{{$leaders['image']['url']}}" class="relative" alt="{{$leaders['image']['alt']}}">@endif
                            </div>
                            <div class="team-content lg:pl-14 lg:pr-5 lg:flex-grow pt-4 text-center lg:text-left">
                                @if($leaders['heading'])<{{$leaders['heading_type']}} class="z-10 relative text-32 lg:text-40 font-montserrat uppercase orange-color pb-10 font-bold">{!! $leaders['heading'] !!}</{{$leaders['heading_type']}}>@endif

                                @if($leaders['content'])<div class="wysiwig_content">{!! $leaders['content'] !!}</div>@endif
                                @if($leaders['bottom_content'])
                                    <a class="orange-color read-less pt-5 mt-6 show_content" id="show_content-{{$i}}" href="#" data-id="{{$i}}">Read More<i class="fas fa-long-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>

                    </div> 
                </section>
                @if($leaders['bottom_content']) 
                <section class="full-width-section no-image pt-10 pb-3 lg:px-5 hidden" id="show_section-{{$i}}">
                    <div class="container mx-auto">
                        <div class="block lg:grid grid-cols-12">
                            <div class="col-start-3 col-end-11">
                            @if($leaders['bottom_content'])<div class="wysiwig_content">{!! $leaders['bottom_content'] !!}</div>@endif
                                <a class="orange-color read-less hide_content" id="hide_content-{{$i}}" href="#" data-id="{{$i}}">Read Less<i class="fas fa-long-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                @endif
                @php $i++ @endphp
            @endforeach
        </div>
    @endif
    @endif

    @php 
$args = array(
    'post_type' => 'therapist',
    'post_status' => 'publish',
    'posts_per_page' => 9
);
$query = new WP_Query($args);


$j = 0;
@endphp

@if($query->have_posts())
<section class="our-therapist-section z-10 pt-10 pb-14 lg:pb-8 lg:pt-32 bg-cover lg:px-5">
    <div class="container mx-auto">
        <div class="pb-8 lg:pb-20 text-center">
            <h2 class="lg:text-40 text-32 royal-blue-color font-montserrat uppercase font-bold">Our Therapists</h2>
        </div>
        
        <div class="block lg:grid grid-cols-3 lg:px-14">
        @while($query->have_posts())
        @php  $query->the_post() ;
        $thumbnail_id = get_post_thumbnail_id( $query->ID );
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); @endphp  
        <div class="bg-white border-orange border-4 mb-8 lg:pb-6 lg:mx-5 lg:mb-24">
            @if(has_post_thumbnail())<a href="{{get_permalink()}}"><img src="{{ the_post_thumbnail_url() }}" class="mx-auto" alt="{{$alt}}"></a>@endif
            <div class="therapist profile px-12 py-6 text-center ">
            <a href="{{get_permalink()}}" class="pb-2 text-24 dark-navy-color font-bold">{{the_title()}}</a>
                <p>@php the_field( 'position' ) @endphp</p>
            </div>
        </div>
        @endwhile        
    </div>
</section>
@endif

