<header>
    @if(isset($header_slider) && $header_slider)
        <section class="primary-header text-center py-4 bg-dark-orange hidden">
            <div class="container relative mx-auto">
                <div class="responsive text-white lg:w-4/5 mx-auto">
                    @foreach($header_slider as $slide)
                        <div class="carousel-inner">
                            @if($slide['content'])
                                <h2 class="mx-auto w-4/5 lg:w-full text-16 lg:text-16">{{ $slide['content'] }} @if($slide['link'])<b class="lg:ml-3 underline ">  <a href="{{ $slide['link']['url']; }}" target="{{ $slide['link']['target']; }}">{{ $slide['link']['title']; }}</a></b>@endif</h2>
                            @endif
                        </div>
                    @endforeach
                </div>
                <i class="far fa-times absolute text-white text-14 lg:text-xl z-10 bottom-0 lg:right-5 close cursor-pointer"></i>
            </div>
        </section>
    @endif
    @if(isset($outpatient) && $outpatient)
        <section class="lg:block hidden secondary-header py-3 flex justify-center text-white bg-dark-blue lg:px-5">
            <div class="container mx-auto">
                <div class="">
                    <ul class="flex flex-row justify-around">
                        @foreach($outpatient as $post)
                        @php 
                            $contact=get_field('contact_number', $post->ID)
                        @endphp
                            <li><a href="tel:{{ $contact }}"><i class="fas fa-phone-alt"></i>{{$post->post_title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif
    <section class="main-header bg-white py-5 lg:py-0 lg:px-5 relative">
        <div class="container mx-auto">
            <div class="flex items-center justify-between relative lg:static">
                <button class="navbar-toggler lg:hidden" type="button">
                    <i class="fas fa-bars flex items-center royal-blue-color text-2xl" aria-hidden="true"></i>
                </button>
                <div class="site-logo">
                    <a href="{{ esc_url(home_url()) }}"  rel="home" aria-current="page">
                        @if(isset($header_logo) && $header_logo)
                            <img src="{{ $header_logo['url'] }}" class="lg:w-56 xl:w-full img-fluid" alt="Site Logo" />
                        @else
                            <img src="{{get_template_directory_uri()}}/resources/images/logo.svg" class="lg:w-56 xl:w-full img-fluid" alt="Site Logo" />
                        @endif
                    </a>
                </div>
                <div class="search-menu lg:hidden">
                    <form action="{{ esc_url(home_url()) }}" id="searchform">
                        <div class="input_search w-full flex items-center">
                            <img src="{{get_template_directory_uri()}}/resources/images/search-icon.svg" class="img-search  pl-3 -mr-7" alt="search-icon" />
                            <input class="form-control pl-6 focus-visible:outline-none italic" value="{{ get_search_query() }}" type="search" placeholder="Search..." aria-label="Search" name="s" id="search">
                        </div>
                    </form>
                    <button class="close-form relative w-8" type="button" id="searchbtn">
                    <img src="{{get_template_directory_uri()}}/resources/images/search-icon.svg" class="img-search" alt="search-icon" />
                    <img src="{{get_template_directory_uri()}}/resources/images/blue-close-icon.svg" class="img-close hidden" alt="search-icon" />
                    </button>
                </div>
                
                <div class="main-menu hidden lg:block justify-end flex basis-full">
                    @if(has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu([
                            'theme_location' => 'primary_navigation', 
                            'menu_class' => 'navbar-nav flex justify-end items-center',  
                            'link_class' => 'lg:text-16 xl:text-18 font-bold hover:dark-blue-color lg:underline lg:decoration-4',
                            'sub_link_class' => 'lg:text-16 xl:text-18 font-bold lg:underline lg:decoration-4 text-white',
                            ]) !!}
                        @endif
                </div>
                <div class="sidenav lg:hidden">
                    <div class="mobile-menu-nav hidden">
                        @if(has_nav_menu('primary_navigation'))
                            {!! wp_nav_menu([
                                'theme_location' => 'mobile_navigation', 
                                'menu_class' => 'navbar-nav',  
                                'link_class' => 'text-18 text-white font-bold',
                                'sub_link_class' => 'text-18 font-bold dark-blue-color',
                                ]) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<main>