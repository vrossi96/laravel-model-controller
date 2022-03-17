@extends('layout.main')

@section('page-name', 'Film singolo')

@section('main')
   <div class="container py-5">
      <div class="row">
         <div class="col-12">
            <div>
               {{ $movie->title }}
            </div>
         </div>
      </div>
   </div>
@endsection
