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
