@extends('layouts.front')

@section('content')
    <section name="module" js="property" css="property">
        <div class="container">
            <div class="">
                @include('property::partials.create-title')
                @include('property::partials.create-type')
                @include('property::partials.create-address')
            </div>
        </div>
    </section>

@endsection