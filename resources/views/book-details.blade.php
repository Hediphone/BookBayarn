@extends('Components.Layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
@endsection

@section('content')
    <x-navbar />

    <section class="book-details-section">
        <div class="container">
            <div class="row" id="card-style">
                <!-- Book Image -->
                <div class="col-md-3">
                    <img src="{{ asset($book['cover']) }}" class="book-details-image" alt="Book Cover">
                    <!-- Buttons Section -->
                    <div class="mt-3">
                        <button class="btn btn-primary btn-block mb-2" id="book-btn1">Add to Favorites</button>
                        <button class="btn btn-secondary btn-block" id="book-btn2">Rate this Book</button>
                    </div>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-8">
                    <h2 class="book-title">{{ $book['title'] }}</h2>
                    <h4 class="book-author-h">by {{ $book['author'] }}</h4>
                    <div class="star-rating mb-3">
                        <span class="rating-number me-2">{{ number_format($book['rating'], 1) }}</span>
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= floor($book['rating']))
                                <!-- Fully Filled Star -->
                                <i class="bi bi-star-fill star-icon"></i>
                            @elseif ($i == ceil($book['rating']) && $book['rating'] - floor($book['rating']) >= 0.5)
                                <!-- Half Filled Star -->
                                <i class="bi bi-star-half star-icon"></i>
                            @else
                                <i class="bi bi-star star-icon"></i>
                            @endif
                        @endfor
                        <span class="num-ratings">{{ number_format($book['num_ratings']) }} ratings</span>
                        <span class="separator">•</span>
                        <span class="num-reviews">{{ number_format($book['num_reviews']) }} reviews</span>
                    </div>
                    <p class="book-descrip"><span id="syn">Synopsis:</span><br>{!! nl2br(e($book['description'])) !!}</p>

                    <p class="book-genres">
                        <span id="genres-title">Genres:</span>
                        @foreach ($book['genres'] as $genre)
                            <a href="#" class="genre-item">{{ $genre }}</a>
                            @if (!$loop->last)
                                &nbsp;
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
