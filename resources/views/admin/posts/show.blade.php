@extends('layouts.app')

@section('content')

<div class="card">
    <div>
        <img src="{{ $Post->post_image }}" alt="">
    </div>
    <p> {{ $Post->author}}</p>
    <h2> {{ $Post->title}}</h2>
    <p> {{ $Post->post_content}}</p>
    <p> {{ $Post->post_date}}</p>
</div>
    
@endsection