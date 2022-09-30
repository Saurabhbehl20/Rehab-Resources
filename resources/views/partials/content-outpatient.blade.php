@if($layouts)
    @foreach($layouts as $key => $layout)
        @php $path='partials.layouts.'.$layout['acf_fc_layout'];  @endphp
        @include('partials.layouts.'.$layout['acf_fc_layout'])
    @endforeach
@endif

@php $args = array(
    'post_type' => 'outpatient-clinics',
    'post_status' => 'publish',
    'posts_per_page' => 8
); 

$query = new WP_Query($args);

@endphp

@if($query->have_posts())
<section class="outpatient-locations-section z-10 pt-20 pb-8 lg:pt-24 bg-cover lg:px-5">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-2 lg:px-14 w-11/12 mx-auto">
            @while($query->have_posts()) @php $query->the_post() @endphp
            <div class="bg-white lg:mx-5 mb-16">
             @php $image_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true); @endphp
                @if(has_post_thumbnail())<a href="{{get_the_permalink()}}"><img src="{{get_the_post_thumbnail_url()}}" class="mx-auto" alt="{{$alt_text}}"></a>@endif
                <div class="px-12 py-8">
                    <div class="therapist-profile-main">
                        <a href="{{get_the_permalink()}}"><h2 class="pb-5 text-24 dark-navy-color font-bold">{{the_title()}}</h2></a>
                        <div class="therapist-profile block lg:flex justify-between flex-wrap">
                            @if(get_field('address'))<p><i class="fas fa-map-marker-alt"></i>{!! the_field('address') !!}</p>@endif
                            @if(get_field('contact_number'))<p><i class="fas fa-phone-alt"></i><a href="tel:{{the_field('contact_number')}}">{{the_field('contact_number')}}</a></p>@endif
                            @if(get_field('email'))<p><i class="fas fa-envelope"></i><a href="mailto:{{the_field('email')}}">{{the_field('email')}}</a></p>@endif
                        </div>
                        {{the_excerpt()}}
                    </div>
                    <a class="text-16 uppercase mx-auto mt-6 block bg-dark-orange hover:bg-dark-navy text-white font-bold py-3 px-8" href="{{get_permalink()}}">view location</a>
                </div>
            </div>
            @endwhile
        </div>
    </div>
</section>
@endif