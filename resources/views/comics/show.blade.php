@extends('layouts.main')

@section('content')

    <section class="container mt-5">
        <div>
        <h1>{{ $comic->title }} <a href="{{ route('comics.edit',$comic)}}" class="btn btn-primary">Edit</a></h1>
         </div>

         <div class="my-3">
            <span class="badge bg-secondary ">{{ $comic->type }}</span>
            PRICE: {{ $comic->price }}
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                <p>{!! $comic->description !!}</p>
            </div>
        </div>
        <section class="container">
            <a href="{{ route('comics.index') }}">Indietro</a>
        </section>
    </section>
    
@endsection

