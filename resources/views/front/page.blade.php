@extends('front.layout.layout')
@section('page_title',$result[0]->name)
@section('header_name',$result[0]->name)

@section('header_img',asset('front_asset/img/about-bg.jpg'))
@section('container')

<p>{{$result[0]->description}}</p>

@endsection