
@extends('layouts.app')

@section('content')
    <table class="table w-75 mx-auto">
    <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">author</th>
        <th scope="col">title</th>
        <th scope="col">post_content</th>
        <th scope="col">post_image</th>
        <th scope="col">post_date</th>
        <th></th>
        <th></th>
        <th></th>
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
                <td>
                    <a href="" class="btn btn-success">
                        <h2> modifica </h2>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                        <h2> visualizza </h2>
                    </a>
                </td>
                <td>
                    <form action="{{}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="cancella">                        
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
    