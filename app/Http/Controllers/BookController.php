<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Author $author
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create(Author $author)
    {
        return view('books.create', [
            'author' => $author,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Author $author
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Author $author, Request $request)
    {
        $this->validate($request, [
            'name' => [
                'required',
                'string',
                'between:1,255',
            ],
        ]);

        $book = $author->books()->create([
            'name' => $request->get('name'),
        ]);

        return redirect()->route('authors.books.show', [
            $author->slug,
            $book->slug,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Author $author
     * @param Book $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Author $author, Book $book)
    {
        return view('books.show', [
            'author' => $author,
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
