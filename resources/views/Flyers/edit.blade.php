@extends('layouts.layout')
@section('content')
    <image-slider :flyer="{{$flyer}}" :photos="{{$flyer->photos}}"></image-slider>
@endsection
