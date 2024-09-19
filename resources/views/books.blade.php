    <!-- Begin page content -->
    <div class="container mt-3">
        @extends('layout.app');
        @section('content')
            <h1>Livres</h1>

            <a href="#" class="btn btn-primary mb-2">Ajouter un livre</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Harry Potter</td>
                        <td>112</td>
                        <td>2</td>
                        <td>
                            --actions--
                        </td>
                    </tr>
                </tbody>
            </table>
            @foreach ($books as $book)
                {{$book}}
            @endforeach

        @endsection
    </div>
