<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Mail\AuthorDeleted;
use App\Mail\BookDeleted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
     * @param Author $author
     * @param Book $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Author $author, Book $book)
    {
        return view('books.edit', [
            'author' => $author,
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Author $author
     * @param Book $book
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Author $author, Book $book, Request $request)
    {
        $this->validate($request, [
            'name' => [
                'required',
                'string',
                'between:1,255',
            ],
        ]);

        $book->name = $request->get('name');
        $book->save();

        return redirect()->route('authors.books.show', [$author->slug, $book->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Author $author
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Author $author, Book $book)
    {
        $book->delete();

        Mail::to(config('app.app_admin_email'))->send(new BookDeleted($author, $book));

        return redirect()->route('authors.show', $author->slug);
    }
}
