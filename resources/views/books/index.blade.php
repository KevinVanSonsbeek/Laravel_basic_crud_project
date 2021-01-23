<h4 style="display:inline;">Boeken </h4>
<hr>
@forelse($author->books  as $book)
    <div>
        <p><a href="{{ route('authors.books.show', [$author->slug, $book->slug]) }}">{{ $book->name }}</a></p>
    </div>
@empty
    <p>Deze auteur heeft nog geen boeken op dit moment.</p>
@endforelse
