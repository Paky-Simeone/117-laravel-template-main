@extends('layouts.app')

@section('title', 'Lista Film')

@section('main-content')
<section>
  <div class="container py-4">
    <h1>Film</h1>
    <div class="row">
      @forelse($movie as $movie)
      <div class="col-6">
        <div class="card mt-3">
          <div class="card-body mt-3">
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title }}</p>
            <p>{{ $movie->nationality }}</p>
            <p>{{ $movie->date }}</p>
            <p>{{ $movie->vote }}</p>
          </div>
        </div>
      </div>
    
    @empty
        <div class="col-12">
          No Film
        </div>
    @endforelse
    </div>
  </div>
</section>

@endsection