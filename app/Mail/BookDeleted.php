<?php

namespace App\Mail;

use App\Author;
use App\Book;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookDeleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Author
     */
    public $author;
    /**
     * @var Book
     */
    public $book;

    /**
     * Create a new message instance.
     *
     * @param Author $author
     * @param Book $book
     */
    public function __construct(Author $author, Book $book)
    {
        $this->author = $author;
        $this->book = $book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('Boek verwijderd')
            ->view('emails.book-deleted');
    }
}
