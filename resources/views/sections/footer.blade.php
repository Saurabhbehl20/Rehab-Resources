</main>
    <footer class="text-white py-16 bg-cover lg:text-left text-center bg-center lg:px-5">
        <div class="container mx-auto">
            <div class="block lg:grid grid-cols-4">
            @if(isset($footer_logo) && $footer_logo)
                <div class="footer-logo flex lg:justify-start justify-center items-center">
                <a href="{{ esc_url(home_url()) }}"  rel="home" aria-current="page"><img src="{{$footer_logo['url']}}" class=" pb-10" alt="Site Footer Logo"></a>
                </div>
                @endif
                @if( (isset($footer_contact) && $footer_contact) || (isset($footer_address) && $footer_address) || (isset($footer_email) && $footer_email) || (isset($footer_phone) && $footer_phone) )
                <div class="footer-contact-menu">
                    @if(isset($footer_contact) && $footer_contact )<h2 class="orange-color font-bold text-24 pb-2">{{$footer_contact}}</h2>@endif
                    @if((isset($footer_address) && $footer_address) || (isset($footer_email) && $footer_email) || (isset($footer_phone) && $footer_phone))
                    <ul class="rid-cols-2 grid grid-cols-6 lg:grid-cols-none">
                        @if(isset($footer_address) && $footer_address)<li class="lg:flex text-left lg:justify-start justify-center relative items-baseline pb-10 lg:pb-3 col-start-2 col-span-4 lg:col-auto lg:col-start-auto mx-auto lg:mx-0"><i class="fas fa-map-marker-alt"></i>{!! $footer_address !!}</li>@endif
                        @if(isset($footer_email) && $footer_email )<li class="lg:flex text-left lg:justify-start justify-center relative items-baseline pb-10 lg:pb-3 col-span-3 lg:col-auto lg:col-start-auto mx-auto lg:mx-0"><i class="fas fa-envelope"></i><a class="hover:orange-color" href="mailto:{{$footer_email}}">{{$footer_email}}</a></li>@endif
                        @if(isset($footer_phone) && $footer_phone )<li class="lg:flex text-left lg:justify-start justify-center relative items-baseline pb-10 lg:pb-3 col-span-3 lg:col-auto lg:col-start-auto mx-auto lg:mx-0"><i class="fas fa-phone-alt"></i><a class="hover:orange-color" href="tel:{{$footer_phone}}">{{$footer_phone}}</a></li>@endif
                    </ul>
                    @endif
                </div>
                @endif
                <div class="footer-menu">
                    @if( isset($footer_menu_heading) && $footer_menu_heading )<h2 class="orange-color font-bold text-24 pb-3 lg:pb-6">{{$footer_menu_heading}}</h2>@endif
                        @if(has_nav_menu('footer_navigation'))
                            {!! wp_nav_menu([
                                'theme_location' => 'footer_navigation', 
                                'menu_class' => 'navbar-nav ', 
                                'li_class' => 'pb-1 lg:pb-5', 
                                'link_class' => 'hover:orange-color',
                                ]) !!}
                            @endif
                </div>
                
                <div class="pt-4 social-icons-copyrights lg:text-right">
                @if(isset($socials) && $socials)
                    <ul class="flex justify-center lg:justify-end lg:pb-8 lg:pt-0 pt-8 pb-14">
                        @foreach($socials as $icons)
                        <li class="bg-dark-orange rounded-full mx-7 royal-blue-color"><a href="{{$icons['link']}}" target="_blank" class="hover:text-white"><i class="{!! $icons['icons'] !!} text-xl"></i></a></li>
                        @endforeach
                    </ul>
                @endif
                    <p>?? {{date('Y')}} Rehab Resources</p>
                    <!-- Start // Logo -->
                    <a href="https://techyscouts.com/" class="techyscouts-credit-link pt-6 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-100 0 3700 552" id="techyscouts-logo" aria-labelledby="techyscouts-logo-title" role="img">
                        <title id="techyscouts-logo-title">Made with love by TechyScouts</title>
                        <path id="techyscouts-logo-heart" style="transform-origin:10% 50%;" d="M436 257L255 427 73 257a81 81 0 0 1-25-62c0-23 4-42 22-59 17-15 38-23 62-23 23 0 45 14 61 29l62 54 62-54c16-15 38-29 61-29 24 0 45 8 61 23 19 17 23 36 23 59 0 24-7 46-26 62m32-154c-50-46-130-46-179 0l-34 30-34-30c-49-46-130-46-179 0-56 51-56 134 0 185l213 196 213-196c56-51 56-134 0-185"/>
                        <path id="techyscouts-logo-line-1" d="M803 372L1016 0l34 20-213 372-34-20z"/>
                        <path id="techyscouts-logo-line-2" d="M879 552l-33-20 213-372 33 20-213 372z"/>
                        <path id="techyscouts-logo-text" d="M3491.171 318.855c11.336 52.417-38.612 83.584-85.725 83.584-36.132 0-80.058-20.542-84.308-60.563l-.355-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.976-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.241-98.814-1.417-14.875 2.48-29.396 11.69-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106zm-254.34 82.168h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316zm-198.366 1.77c-41.092 0-86.788-24.083-86.788-70.125V152.394h5.667v180.628c0 42.855 43.217 64.105 81.12 64.105 37.904 0 81.121-21.25 81.121-64.46V152.395h5.668v180.628c0 45.688-46.05 69.772-86.788 69.772zm-239.105.709c-34.715 0-66.596-14.167-89.267-37.542-22.672-23.021-37.195-54.897-37.195-89.96 0-35.063 14.523-66.938 37.195-89.96 22.67-23.375 54.552-37.542 89.267-37.542 35.07 0 66.597 14.167 89.622 37.542 22.671 23.022 37.195 54.897 37.195 89.96 0 35.063-14.524 66.939-37.195 89.96-23.025 23.375-54.552 37.542-89.622 37.542zm85.726-213.212c-21.963-22.312-52.427-36.125-85.726-36.125-33.298 0-63.408 13.813-85.37 36.125-21.61 21.959-35.425 52.064-35.425 85.71 0 33.646 13.816 63.75 35.424 85.71 21.963 22.312 52.073 36.125 85.371 36.125 33.299 0 63.763-13.813 85.726-36.125 21.608-21.96 35.07-52.064 35.07-85.71 0-33.646-13.462-63.751-35.07-85.71zM2544.67 394.648c31.882 0 60.93-13.459 81.83-35.063 9.564-9.917 17.711-21.25 23.379-34.355h6.022c-6.022 14.52-14.878 27.625-25.505 38.605-21.963 22.667-52.073 36.48-85.726 36.48-33.652 0-63.762-13.813-85.725-36.48-21.608-22.313-35.424-53.126-35.424-87.48 0-34.001 13.816-64.814 35.424-87.127 21.963-22.667 52.073-36.48 85.725-36.48 33.653 0 63.763 13.813 85.726 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.829-34.708-31.88 0-60.928 13.104-81.828 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.828 35.064zm-228.124 7.791c-36.132 0-80.058-20.542-84.309-60.563l-.354-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.977-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.24-98.814-1.418-14.875 2.479-29.396 11.689-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106 11.336 52.417-38.611 83.584-85.725 83.584zm-182.426-2.479h-5.668V297.605l-91.039-145.211h6.73l87.143 139.544 87.143-139.544h6.73l-91.039 145.21V399.96zm-120.08-122.897h-155.51V399.96h-5.313V152.394h5.314V271.75h155.51V152.394h5.668V399.96h-5.668V277.063zm-298.26 117.585c31.881 0 60.929-13.459 81.829-35.063 9.564-9.917 17.711-21.25 23.38-34.355h6.021c-6.022 14.52-14.878 27.625-25.505 38.605-21.962 22.667-52.073 36.48-85.725 36.48-33.653 0-63.763-13.813-85.726-36.48-21.608-22.313-35.423-53.126-35.423-87.48 0-34.001 13.815-64.814 35.423-87.127 21.963-22.667 52.073-36.48 85.726-36.48 33.652 0 63.763 13.813 85.725 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.828-34.708-31.882 0-60.929 13.104-81.829 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.829 35.064zm-277.365 5.312V152.394h136.736v5.313h-131.068v115.46h128.234v5.666h-128.234v115.815h131.776v5.312h-137.444zm-106.975 1.063h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316z" style="fill:none;stroke:currentColor;stroke-width:13;"/>
                        </svg>
                    </a>
                    <!-- End // Logo -->
                </div>
                
            </div>
        </div>
    </footer>
