@extends('layouts.main')

@section('content')

    <section class="container mt-5">

        <h1>Modifica: 
            <a href="{{ route('comics.show', $comic) }}">{{ $comic['title'] }}</a>
        </h1>
        <div class="row col-8 offset-2">
            <form action="{{ route('comics.update', $comic) }}" method="post">
                {{-- per il form sempre questi due parametri (tutti i metodi non get) --}}
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="title" class="form.label">Nome Comic</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $comic['title'] }}">
                </div>

                <div class="mb-4">
                    <label for="type" class="form.label">Selezione tipo:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="comic book" @if ($comic['type'] === 'comic book') selected @endif>Comic Book</option>
                        <option value="graphic novel" @if ($comic['type'] === 'graphic novel') selected @endif>Graphic Novel</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="description" class="form.label">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{ $comic['description'] }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form.label">Carica Immagine</label>
                    <input type="text" id="image" name="image" class="form-control" value="{{ $comic['image'] }}">
                </div>
                <div class="mb-4">
                    <label for="series" class="form.label">Serie:</label>
                    <input type="text" id="series" name="series" class="form-control" value="{{ $comic['series'] }}">
                </div>
                <div class="mb-4">
                    <label for="price" class="form.label">Prezzo:</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ $comic['price'] }}">
                </div>
                <div class="mb-4">
                    <label for="sale_date" class="form.label">Prezzo:</label>
                    <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ $comic['sale_date'] }}">
                </div>

                <button type="submit" class="btn btn-dark">INVIA</button>
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </form>
        </div>

    </section>
    
@endsection

