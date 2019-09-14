@extends('layouts.layout')
@section('content')
    <form id="createNewFlyerForm" action="/flyers" method="POST" class="col-md-6 offset-3">
        @csrf
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{old('street')}}">
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}">
        </div>
        <div class="form-group">
            <label for="zip">zip:</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{{old('zip')}}">
        </div>
        <div class="form-group">
            <label for="country">country:</label>
            <input type="text" name="country" id="country" class="form-control" value="{{old('country')}}">
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" name="state" id="state" class="form-control" value="{{old('state')}}">
        </div>
        <hr>
        <div class="form-group">
            <label for="numberOfBedRooms">Bed Rooms:</label>
            <input type="number" name="numberOfBedRooms" id="numberOfBedRooms" class="form-control" value="{{old('numberOfBedRooms')}}">
        </div>
        <div class="form-group">
            <label for="area">Area:</label>
            <input type="number" name="area" id="area" class="form-control" value="{{old('area')}}">
        </div>
        <div class="form-group">
            <label for="numberOfGarages">Garages:</label>
            <input type="number" name="numberOfGarages" id="numberOfGarages" class="form-control" value="{{old('numberOfGarages')}}">
        </div>
        <div class="form-group">
            <label for="numberOfBathRooms">Bathrooms:</label>
            <input type="text" name="numberOfBathRooms" id="numberOfBathRooms" class="form-control" value="{{old('numberOfBathRooms')}}">
        </div>
        <hr>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input type="text" name="price" id="Price" class="form-control" value="{{old('Price')}}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="6"
                      class="form-control">{{old('description')}}</textarea>
        </div>
        <hr>
        <button type="submit" class="btn btn-outline-success">Publish</button>
    </form>
    @if(count($errors) > 0)
        <div class="col-md-6 offset-3 border border-danger alert-danger" style="margin-top:20px;border-radius: 5px; ">
            <div class="row ">
                <ul class="list-group" style="width: 100%">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection
