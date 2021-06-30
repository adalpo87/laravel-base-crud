@extends('layouts.main')

@section('content')

    <section class="container mt-5">

        <h1>I nostri comics:</h1>
        @if (session('deleted'))
          <h2>LA CANCELLAZIONE E' AVVENUTA CORRETTAMENTE</h2>
        @endif
        <section class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Series</th>
                        <th>Price</th>
                        <th colspan="3">Actions</th>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>
                                <a href="{{ route('comics.show',$comic)}}" class="btn btn-success">Look</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit',$comic)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                    
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section class="container">
            {{-- PER CREARE LE PAGINE NUMERATE --}}
            {{ $comics->links() }}
        </section>
    </section>
    
@endsection
