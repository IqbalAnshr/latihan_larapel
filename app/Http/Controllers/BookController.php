<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $booksForHero = book::limit(3)->get();
        $bestSellerBooks = book::orderByDesc('sold')->limit(6)->get();
        $featuredBooks = book::limit(3)->get();
        $latestBooks = book::orderByDesc('created_at')->limit(3)->get();
        $bestReviews = book::orderByDesc('price')->limit(3)->get();
        $onsaleBooks = book::orderBy('sold')->limit(3)->get();


        // dd($booksForHero, $bestSellerBooks);

        return view('landing_page', ['booksForHero' => $booksForHero, 'bestSellerBooks' => $bestSellerBooks, 'featuredBooks' => $featuredBooks, 'latestBooks' => $latestBooks, 'bestReviews' => $bestReviews, 'onsaleBooks' => $onsaleBooks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookRequest $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}
