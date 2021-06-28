@extends('layouts.main')

@section('content')

    <section class="container mt-5">

        <h1>Aggiungi Comics</h1>
        <div class="row col-8 offset-2">
            <form action="{{ route('comics.store') }}" method="post">
                {{-- per il form sempre questi due parametri (tutti i metodi non get) --}}
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="title" class="form.label">Nome Comic</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-4">
                    <label for="type" class="form.label">Selezione tipo:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="description" class="form.label">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form.label">Carica Immagine</label>
                    <input type="text" id="image" name="image" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="series" class="form.label">Serie:</label>
                    <input type="text" id="series" name="series" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="price" class="form.label">Prezzo:</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="sale_date" class="form.label">Prezzo:</label>
                    <input type="date" id="sale_date" name="sale_date" class="form-control">
                </div>

                <button type="submit" class="btn btn-dark">INVIA</button>
                <button type="reset" class="btn btn-dark">RESET</button>
            </form>
        </div>

    </section>
    
@endsection

