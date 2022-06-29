@extends('layout.app')
@section('content')
 <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
<div class="container ">
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <h1>{{ $post->title }}</h1>
                <img src="{{ Voyager::image( $post->image ) }}">
                <p style="padding: 15px;">{!! $post->body !!}</p>
            </div>
        </div>
</div>
 </section>
@endsection