{{--
  Template Name: For Physicians Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-for-physicians')
  @endwhile
@endsection
