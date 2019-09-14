@extends('layouts.layout')
@section('content')

    <image-slider :flyeruser="{{$flyer->user}}" :flyer="{{$flyer}}"
                  :photos="{{$flyer->photos}}"></image-slider>

    @can('update', $flyer)
        <form action="/photos/{{$flyer->id}}/photos"
              class="dropzone"
              id="uploadImages">
            @csrf
        </form>
    @endcan

@endsection
