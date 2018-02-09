@extends('layouts.front')

@section('content')
    <section name="module" js="property" css="property">
        <div class="container">
            @include('property::partials.create-address')
        </div>
    </section>

@endsection