    <!-- Begin page content -->
    <div class="container mt-3">
        @extends('layout.app')
        @section('content')
            <h1>Livre à commander</h1>

            <!-- ajouter un livre -->
            <a href={{ route('books.index') }} class="btn btn-primary float-right mb-2">Retour aux livres</a>

            @if ($books->count() > 0)
            @else
                <h3 class="text-success">Aucun livre n'a besoin d'être commandés pour l'instant!</h3>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>

                @foreach ($books as $book)
                    <tbody>
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->pages}}</td>
                            <td>{{$book->quantity}}</td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
            <!-- Afiche les liens de pagination -->
            {!! $books->links() !!}
        @endsection
    </div>
