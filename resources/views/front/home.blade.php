@extends('front.layout.layout')
@section('header_img',asset('front_asset/img/home-bg.jpg'))
@section('page_title','Home')
@section('header_name','My Blogs')
@section('container')
    
@foreach ($result as $list)
<div class="post-preview">
        <a href="{{url('post/'.$list->slug)}}">
        <h2 class="post-title">
            {{ $list->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $list->short_desc }}
        </h3>
        </a>
        <?php
            $date=date_create($result[0]->post_date);
        ?>
        <p class="post-meta">Posted by on {{date_format($date,"Y F d ")}}</p>
    </div>
    <hr>
@endforeach
    
@endsection