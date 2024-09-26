    <!-- Begin page content -->
    <div class="container mt-3">
        @extends('layout.app')
        @section('content')
            <h1>Livres</h1>

            <!--ajouter un livre-->
            <a href="TODO route Laravel" class="btn btn-primary float-right mb-2">Ajouter un livre</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Author</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>

                @foreach ($books as $book)
                    <tbody>
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->pages}}</td>
                            <td>{{$book->quantity}}</td>

                            <!--actions-->
                            <td>
                                <a class="btn btn-info" href={{ route('books.show', $book->id) }}>Afficher</a>
                                <a class="btn btn-primary" href={{ route('books.edit', $book->id) }}>Modifier</a>
                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        @endsection
    </div>
