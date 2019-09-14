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
        <vue-dropzone
            ref="/photos/{{$flyer->id}}/photos"
            id="dropzone"
            :options="{url:'/photos/{{$flyer->id}}/photos', headers:{'X-CSRF-TOKEN':document.head.querySelector('[name=csrf-token]').content}}">



        </vue-dropzone>

    @endcan

@endsection
