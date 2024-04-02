@extends('layouts.app')

{{-- yield di app.blade, sotto #id stamperà questo codice --}}
@section('content')
    <div class="container">

        <div class="my-4">
            <h2>Creazione</h2>
        </div>

        {{-- aggiungere sempre 'method POST' --}}
        <form action="{{route('dashboard.projects.store')}}" method="POST"
            enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input
                    type="text"
                    name="titolo"
                    id="titolo"
                    placeholder="..."
                    class="form-control
                    @error('titolo') is-invalid @enderror"
                />
                {{-- for, name, id uguali --}}
                @error('titolo')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine</label>
                <input
                    type="file"
                    name="cover_image"
                    id="cover_image"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="contenuto" class="form-label">Contenuto</label>
                <input
                    type="text"
                    name="contenuto"
                    id="contenuto"
                    placeholder="..."
                    class="form-control
                    @error('contenuto') is-invalid @enderror"
                />
                {{-- for, name, id uguali --}}
                @error('contenuto')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- aggiungere sempre 'type submit' --}}
            <button type="submit" class="btn btn-success">Conferma creazione</button>

        </form>
    </div>
@endsection
