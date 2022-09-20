
@extends('layouts.app')

@section('content')
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">author</th>
        <th scope="col">title</th>
        <th scope="col">post_content</th>
        <th scope="col">post_image</th>
        <th scope="col">post_date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ $post->post_content }}</td>
            <td>{{ $post->post_image }}</td>
            <td>{{ $post->post_date }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
    