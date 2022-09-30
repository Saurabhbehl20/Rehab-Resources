{{--
    Template Name: outpatient
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
@include('partials.layouts.inner_hero')
@include('partials.content-outpatient')
@endwhile
@endsection
