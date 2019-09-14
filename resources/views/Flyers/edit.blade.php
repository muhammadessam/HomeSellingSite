@extends('layouts.layout')
@section('content')

    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 single-list-page">
                    <div class="single-list-slider owl-carousel" id="sl-slider">
                        <div class="sl-item set-bg" data-setbg="{{asset('img/single-list-slider/1.jpg')}}">
                        </div>
                        <div class="sl-item set-bg" data-setbg="{{asset('img/single-list-slider/2.jpg')}}">
                        </div>
                        <div class="sl-item set-bg" data-setbg="{{asset('img/single-list-slider/3.jpg')}}">
                        </div>
                        <div class="sl-item set-bg" data-setbg="{{asset('img/single-list-slider/4.jpg')}}">
                        </div>
                        <div class="sl-item set-bg" data-setbg="{{asset('img/single-list-slider/5.jpg')}}">
                        </div>
                    </div>
                    <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                        <div class="sl-thumb set-bg" data-setbg="{{asset('img/single-list-slider/1.jpg')}}"></div>
                        <div class="sl-thumb set-bg" data-setbg="{{asset('img/single-list-slider/2.jpg')}}"></div>
                        <div class="sl-thumb set-bg" data-setbg="{{asset('img/single-list-slider/3.jpg')}}"></div>
                        <div class="sl-thumb set-bg" data-setbg="{{asset('img/single-list-slider/4.jpg')}}"></div>
                        <div class="sl-thumb set-bg" data-setbg="{{asset('img/single-list-slider/5.jpg')}}"></div>
                    </div>
                    <div class="single-list-content">
                        <div class="row">
                            <div class="col-xl-8 sl-title">
                                <h2>{{$flyer->street}}</h2>
                                <p><i class="fa fa-map-marker"></i>{{$flyer->city}}</p>
                            </div>
                            <div class="col-xl-4">
                                <a class="price-btn">{{$flyer->price}}</a>
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Property Details</h3>
                        <div class="row property-details-list">
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-th-large"></i>{{$flyer->area}}</p>
                                <p><i class="fa fa-bed"></i>{{$flyer->numberOfBedRooms}}</p>
                                <p><i class="fa fa-user"></i>{{$flyer->user->name}}</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-car"></i>{{$flyer->numberOfGarages}}</p>
                                <p><i class="fa fa-clock-o"></i>{{$flyer->created_at}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><i class="fa fa-bath"></i>{{$flyer->numberOfBathRooms}}</p>
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Description</h3>
                        <div class="description">
                            <p>{{$flyer->description}}</p>
                        </div>
                        <h3 class="sl-sp-title">Photos</h3>
                        <div>
                            <form action="/photos/{{$flyer->id}}/photos"
                                  class="dropzone"
                                  id="PhotoUpload">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-md-7 sidebar">
                    <div class="author-card">
                        <div class="author-img set-bg" data-setbg="{{asset('img/author.jpg')}}"></div>
                        <div class="author-info">
                            <h5>{{$flyer->user->name}}</h5>
                        </div>
                        <div class="author-contact">
                            <p><i class="fa fa-envelope"></i>{{$flyer->user->email}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
