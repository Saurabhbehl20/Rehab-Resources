@extends('layouts.app')
@section('content')
  @php $hero_zone=$search_hero_zone; @endphp
  @include('partials.layouts.inner_hero')
  @php 
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $s = (get_query_var('s')) ? get_query_var('s') : null;
    $max_num_pages = $wp_query->max_num_pages;
  @endphp
  @if (! have_posts())
    <section class="blogs-section bg-white pt-20 lg:pt-28 bg-cover lg:px-5 mb-24">
        <div class="container mx-auto">
            <div class="block lg:grid grid-cols-1 text-center lg:px-4">
              <h2 class="py-8 text-24 font-bold">{!! __('Sorry, no results were found.', 'sage') !!}</h2>
            </div>
        </div>
    </section>
  @endif

  @if (have_posts())
    <section class="blogs-section bg-white pt-20 lg:pt-28 bg-cover lg:px-5">
      <div class="container mx-auto">
          <div class="block lg:grid grid-cols-3 text-center lg:px-4">
            @while(have_posts()) @php the_post();
              $post_image = get_the_post_thumbnail_url( get_the_ID(), 'blog-thumb'); 
              $col_class='';  
              $author_id = get_post_field ('post_author', get_the_ID());
              $display_name = get_the_author_meta( 'display_name' , $author_id );
			      	$categories = get_the_category( get_the_ID() );
              @endphp
              @if($post_image)
                @php
                  $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                  $alt=get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
                @endphp
              @else
                @php $col_class=' no_post_image'; @endphp
              @endif
              <div class="blogs-inner-col bg-white border-orange text-center border-4 pb-20 lg:pb-7 mb-24 mt-24 lg:mx-4 px-9{{$col_class}}">
                @if($post_image)
                  <a href="{{ get_the_permalink() }}" class="inline-block"><img src="{{$post_image}}" class="-mt-12 lg:-mt-32 inline-block mx-auto feature_img" alt="{{ $alt}}"></a>
                @endif
                <a href="{{ get_the_permalink() }}" class=
                "block"><h2 class="py-8 text-24 font-bold">{{ get_the_title() }}</h2></a>
                <div class="blogs-content pb-4 royal-blue-color block lg:flex justify-between flex-wrap">
                    <p><img src="{{get_template_directory_uri()}}/resources/images/blue-user.svg">{{ $display_name }} </p>
                    <p><img src="{{get_template_directory_uri()}}/resources/images/blue-calendar.svg"> {{get_the_date('d/m/Y')}}</p>
                      @if($categories)
                        <p><img src="{{get_template_directory_uri()}}/resources/images/blue-tag-black-tool-shape.svg">
                          @php $count = count($categories); $i = 1; @endphp
                          @foreach($categories as $category)
                            <a href="{{get_home_url()}}/category/{{$category->slug}}">{{$category->name}}</a> @if($count!=$i) ,@endif
                            @php $i++; @endphp
                          @endforeach
                        </p>
                      @endif
                </div>
                <p>{!! get_the_excerpt() !!}</p>
                <a class="pt-7 pb-4 orange-color float-right read-less" href="{{ get_the_permalink() }}">Read More<i class="fas fa-long-arrow-right"></i></a>
              </div>
            @endwhile
          </div>
          <div class="block lg:grid grid-cols-1 text-center lg:px-4 mb-20">
            <ul class="pagination text-center">
                @php
                $big = 999999999; // need an unlikely integer
                  echo paginate_links( array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $max_num_pages,
                      'prev_text' => '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.2498 6.7501H2.28785L8.01703 1.29317C8.31702 1.00742 8.32865 0.532676 8.0429 0.23268C7.75753 -0.0669413 7.28279 -0.0789412 6.98241 0.206805L0.439495 6.43923C0.156373 6.72273 0 7.09922 0 7.50009C0 7.90059 0.156373 8.27746 0.452619 8.57333L6.98279 14.793C7.12791 14.9314 7.31391 15 7.49991 15C7.69791 15 7.8959 14.922 8.04328 14.7671C8.32902 14.4671 8.3174 13.9928 8.0174 13.707L2.26422 8.25008H17.2498C17.6638 8.25008 17.9998 7.91409 17.9998 7.50009C17.9998 7.0861 17.6638 6.7501 17.2498 6.7501Z" fill="#00205C"/> </svg> ',
                      'next_text' => '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.750212 8.2499L15.7122 8.2499L9.98297 13.7068C9.68298 13.9926 9.67135 14.4673 9.9571 14.7673C10.2425 15.0669 10.7172 15.0789 11.0176 14.7932L17.5605 8.56077C17.8436 8.27727 18 7.90078 18 7.49991C18 7.09941 17.8436 6.72254 17.5474 6.42667L11.0172 0.206996C10.8721 0.0686229 10.6861 3.14253e-07 10.5001 2.97992e-07C10.3021 2.80682e-07 10.1041 0.0779984 9.95673 0.232871C9.67098 0.532868 9.6826 1.00724 9.9826 1.29298L15.7358 6.74992L0.750212 6.74992C0.336219 6.74992 0.000221944 7.08591 0.000221908 7.49991C0.000221872 7.9139 0.336218 8.2499 0.750212 8.2499Z" fill="#00205C"/></svg>',
                  ) );
                @endphp
              </ul>
          </div>
        </div>
    </section>
  @endif

@endsection