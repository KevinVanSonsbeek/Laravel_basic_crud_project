<div>
    <p>
        De volgende auteur is verwijderd: <strong>{{ $author->name }}</strong>.<br>
        Met de volgende boeken:
    </p>
    <ul>
        @foreach($author->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>
</div>
