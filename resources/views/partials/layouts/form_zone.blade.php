@php
    $heading = $layout['heading'];

    $heading_type = $layout['heading_type'];
    
    $content = $layout['content'];
        

@endphp

@if($heading || $form_id || $content)
<section class=" form-zone-section relative text-white py-28 bg-cover text-center lg:px-5" id="form-section_{{ get_the_ID() }}_{{$key}}">
    <div class="container mx-auto">
        @if($heading)<{{$heading_type}} class="z-10 relative text-32 lg:text-48 font-montserrat uppercase font-bold lg:px-5 mb-4">{!! $heading !!}</{{$heading_type}}>@endif
        @if($content)<div class="wysiwig_content">{!! $content !!}</div>@endif
    </div>       
</section> 
@endif