<h4 style="display:inline;">Boeken </h4><span style="display:inline; float:right;"><a href="{{ route('authors.books.create', $author->slug) }}">Boek toevoegen</a></span>
<hr>
@forelse($author->books  as $book)
    <div>
        <p><a href="{{ route('authors.books.show', [$author->slug, $book->slug]) }}">{{ $book->name }}</a></p>
    </div>
@empty
    <p>Deze auteur heeft nog geen boeken op dit moment.</p>
@endforelse
