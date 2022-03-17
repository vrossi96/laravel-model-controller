@extends('layout.main')

@section('page-name', 'Lista Film')

@section('main')
   <div class="movies container">
      <div class="row justify-content-center">
         @foreach ($movies as $movie)
            <div class="col-3">
               {{-- SINGLE CARD --}}
               <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <a class="text-decoration-none text-white" href="{{ route('movies.show', $movie->id) }}">
                     @include('movies.includes.content_card')
                  </a>
               </div>
            </div>
         @endforeach
      </div>
   </div>
@endsection
