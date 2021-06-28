@extends('layouts.main')

@section('content')

    <section class="container text-center pt-5">


        <h1>Errore 404</h1>
        <h2>Pagina non trovata</h2>
        <p>{{ $exception->getMessage() }}</p>

    </section>
    
@endsection

