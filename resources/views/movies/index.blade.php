@extends('layout.main')

@section('page-name', 'Lista Film')

@section('main')
   <div class="container py-5">
      <div class="row">
         <div class="col-12">
            <ul>
               @foreach ($movies as $movie)
                  <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
@endsection
