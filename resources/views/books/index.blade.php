    <!-- Begin page content -->
    <div class="container mt-3">
        @extends('layout.app')
        @section('content')
            <h1>Livres</h1>

            <a href="#" class="btn btn-primary mb-2">Ajouter un livre</a>

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
                            <td>
                                --actions--
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        @endsection
    </div>
