@extends('layout.main')

@section('page-name', $movie->title)

@section('main')
   <div class="movies container">
      <div class="row">
         <div class="col-6 offset-3 d-flex justify-content-center">
            <div>
               <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <a class="text-decoration-none text-white" href="{{ route('movies.index') }}">
                     @include('movies.includes.content_card')
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
