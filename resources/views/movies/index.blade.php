@extends('layout.main')

@section('page-name', 'Lista Film')

@section('main')
   <div class="movies-index container py-5">
      <div class="row justify-content-center">
         @foreach ($movies as $movie)
            <div class="col-3">
               <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <a class="text-decoration-none text-white" href="{{ route('movies.show', $movie->id) }}">
                     <div class="card-header">
                        <h5>{{ $movie->title }}</h2>
                           <div>{{ $movie->vote }}</div>
                     </div>
                     <div class="card-body">
                        <p>IT: {{ $movie->title }}</p>
                        <p>Titolo Originale: {{ $movie->original_title }}</p>
                        <p>Origine: <span class="text-capitalize">{{ $movie->nationality }}</span></p>
                        <p class="text-info m-0">{{ $movie->date }}</p>
                     </div>
                  </a>
               </div>
            </div>
         @endforeach
      </div>
   </div>
@endsection
