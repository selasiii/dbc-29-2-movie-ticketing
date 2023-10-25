@extends('layout.master')
@section('title', "List of All Movies")

@section('content')
    <div>
        <a class="btn btn-success" 
        href="{{route('movies.create')}}">Add A Movie</a>
    </div>

    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Genre</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
            <tr>
                <th scope="row">{{$movie->title}}</th>
                <td>{{$movie->genre}}</td>
                <td>{{$movie->description}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('movies.edit', $movie->id)}}">Edit</a>
                    <a class="btn btn-info" href="{{route('movies.show', $movie->id)}}">View</a>
                    <a class="btn btn-danger" href="{{route('movies.destroy', $movie->id)}}">Delete</a>
                </td>
              </tr>
            @empty
                <tr>
                    <th scope="row" colspan="4">No movieis available</th>
                </tr>
            @endforelse
        </tbody>
      </table>
@endsection