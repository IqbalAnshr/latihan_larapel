@extends('layout.app')
@section('content')
    @include('partials.billboard', ['booksForHero' => $booksForHero])
    @include('partials.services')
    @include('partials.best_selling', ['bestSellerBooks' => $bestSellerBooks])
    @include('partials.limited_offer')
    @include('partials.list_item', [
        'featuredBooks' => $featuredBooks,
        'latestBooks' => $latestBooks,
        'bestReviews' => $bestReviews,
        'onsaleBooks' => $onsaleBooks,
    ])
    @include('partials.categories')
    @include('partials.customer_review')
    @include('partials.latest_post')
    @include('partials.instagram')
@endsection
