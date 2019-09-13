@extends('layouts.layout')
@section('content')

    <b-jumbotron header="Welcome" lead="Sell Your House Now ">
        <p>Start selling your house online and nuy ones</p>
        <b-button variant="primary" href="#">Publish your House</b-button>
    </b-jumbotron>
    <b-jumbotron header="House to buy">
        <house-photos></house-photos>
    </b-jumbotron>
@endsection
