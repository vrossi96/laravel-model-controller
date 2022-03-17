@extends('layout.main')

@section('page-name', 'Lista Film')

@section('main')
   <div>
      <ul>
         @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
         @endforeach
      </ul>
   </div>
@endsection
