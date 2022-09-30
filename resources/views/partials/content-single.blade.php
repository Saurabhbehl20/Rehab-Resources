@php
$post_image = get_the_post_thumbnail_url( get_the_ID(), 'full'); 
$author_id = get_post_field ('post_author', get_the_ID());
$display_name = get_the_author_meta( 'display_name' , $author_id );
$categories = get_the_category( get_the_ID() );
@endphp
@if($post_image)
    <style>
        .inner-hero-section {
            background-image:url({{$post_image}});
        }
    </style>
@endif
<section class="inner-hero-section relative mt-40 lg:mt-52 text-white py-28 lg:pt-44 lg:pb-36 bg-cover bg-bottom text-center z-10 lg:px-5 single-hero-section">
    <div class="container mx-auto">
        <h1 class="z-10 relative text-32 lg:text-48 font-montserrat uppercase font-bold lg:px-5">{{ get_the_title() }} </h1>
        <div class="blogs-content pb-4 block lg:flex justify-center flex-wrap">
            <p class="z-10 px-2"><img src="{{get_template_directory_uri()}}/resources/images/user.svg">{{ $display_name }} </p>
            <p class="z-10 px-2"><img src="{{get_template_directory_uri()}}/resources/images/calendar.svg">{{get_the_date('d/m/Y')}} </p>
            @if($categories)
              <p class="z-10 px-2"><img src="{{get_template_directory_uri()}}/resources/images/tag-black-tool-shape.svg">
                @php $count = count($categories); $i = 1; @endphp
                @foreach($categories as $category)
                  <a href="{{get_home_url()}}/category/{{$category->slug}}">{{$category->name}}</a> @if($count!=$i) ,@endif
                  @php $i++; @endphp
                @endforeach
              </p>
            @endif
        </div>
    </div>       
</section> 
<section class="full-width-section bg-cover pt-32 lg:pt-52 pb-24 lg:px-5 single-content-section">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12">
          <div class="col-start-3 col-end-11">
            @if(get_the_content())<div class="wysiwig_content">{!! the_content() !!}</div>@endif
          </div>
        </div>
    </div>
</section>