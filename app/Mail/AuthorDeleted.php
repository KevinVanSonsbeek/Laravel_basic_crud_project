<?php

namespace App\Mail;

use App\Author;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuthorDeleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Author
     */
    public $author;

    /**
     * Create a new message instance.
     *
     * @param Author $author
     */
    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('Auteur verwijderd')
            ->view('emails.author-deleted');
    }
}
