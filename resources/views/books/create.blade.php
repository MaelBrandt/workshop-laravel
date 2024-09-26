@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-12">
        <a class="btn btn-primary" href={{ route('books.index') }}>Retour</a>
    </div>
</div>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="card col-12 col-lg-6 offset-0 offset-lg-3">
        <div class="card-header">
            Modifier un livre
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputTitle">Titre</label>
                    <input type="text" name="title" value=" " class="form-control" id="inputTitle">
                </div>
                <div class="form-group col-12">
                    <label for="inputAuthor">Author</label>
                    <input type="text" name="author" value=" " class="form-control" id="inputAuthor">
                </div>
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label for="inputPages">Nombre de pages</label>
                        <input type="text" name="pages" value=" " class="form-control" id="inputPages">
                    </div>
                    <div class="form-group col-6">
                        <label for="inputQuantity">Quantité</label>
                        <input type="text" name="quantity" value=" " class="form-control" id="inputQuantity">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Modifier</button>
            </div>
        </div>
    </div>
</form>

@endsection
