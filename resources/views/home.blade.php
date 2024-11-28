@extends('Components.Layout')

@section('styles')
<link rel="stylesheet" href="asset/css/style.css">
@endsection

@section('content')

<x-navbar/>
<x-carousel />

<section class="popular-now-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-left">Popular Now</h3>
            <a href="" class="view-all-link">View All</a>
        </div>

        <div class="row">
        @foreach (array_slice($posts, 0, 4) as $post)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="{{ route('books.show', $post['book_id']) }}">
                        <img src="{{ asset($post['cover']) }}" class="card-img-top" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="book-title">{{ $post['title'] }}</h5>
                            <h6 class="book-author">{{ $post['author'] }}</h6>
                            <div class="star-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi bi-star{{ $i <= $post['rating'] ? '-fill' : '' }}"></i>
                                @endfor
                            </div>
                            @foreach ($post['comments'] as $comment)
                                <div class="last-reader mt-3">
                                    <img src="{{ asset('asset/images/renjun.png') }}" class="rounded-circle" width="24" height="24" alt="Reader's Profile Picture">
                                    <span class="reader"></span>
                                    <span class="time">{{ $comment['time'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>

<section class="latest-books-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-left">Latest Books</h3>
            <a href="" class="view-all-link">View All</a>
        </div>

        <div class="row">
            @foreach (array_slice($posts, 4, 4) as $post)
                <div class="col-md-3 mb-4">
                    <div class="card">
                    <a href="{{ route('books.show', $post['book_id']) }}">
                        <img src="{{ $post['cover'] }}" class="card-img-top" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="book-title">{{ $post['title'] }}</h5>
                            <h6 class="book-author">{{ $post['author'] }}</h6>
                            <div class="star-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi bi-star{{ $i <= $post['rating'] ? '-fill' : '' }}"></i>
                                @endfor
                            </div>
                            @foreach ($post['comments'] as $comment)
                                <div class="last-reader mt-3">
                                    <img src="{{ asset('asset/images/renjun.png') }}" class="rounded-circle" width="24" height="24" alt="Reader's Profile Picture">
                                    <span class="reader"></span>
                                    <span class="time">{{ $comment['time'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection