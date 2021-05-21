@extends('front.layout.layout')

@section('header_img', asset('storage/post/'.$result[0]->image) )
@section('page_title',$result[0]->title)
@section('header_name',$result[0]->title)

@section('container')
    
<blockquote class="blockquote">{{$result[0]->short_desc}}</blockquote>


<p>{{$result[0]->long_desc}}</p>
<?php
    $date=date_create($result[0]->post_date);
?>
<blockquote class="blockquote">Posted by {{date_format($date,"Y F d ")}}</blockquote>
@endsection