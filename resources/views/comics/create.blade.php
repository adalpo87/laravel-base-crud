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

            </form>
        </div>

    </section>
    
@endsection

