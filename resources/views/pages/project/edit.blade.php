@extends('layouts.app')

{{-- yield di app.blade, sotto #id stamperà questo codice --}}
@section('content')
    <div class="container">

        <div class="my-4">
            <h2>Modifica: {{$project->titolo}}</h2>
        </div>

        {{-- parametro '$project->id' --}}
        <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input
                    type="text"
                    class="form-control"
                    name="titolo"
                    id="titolo"
                    placeholder="..."
                    value="{{ old('titolo', $project->titolo) }}"
                />
                {{-- for, name, id uguali --}}
            </div>


            <div class="mb-3">
                {{-- immagine precedente --}}
                    @if ($project->cover_image)
                        <img class="img-fluid" src="{{asset('/storage/' . $project->cover_image)}}" alt="img">
                    @endif

                <label for="cover_image" class="form-label mt-2">Cambia immagine</label>
                <input
                    type="file"
                    name="cover_image"
                    id="cover_image"
                    class="form-control
                    @error('cover_image') is-invalid @enderror"
                />
            </div>



            <div class="mb-3">
                <label for="contenuto" class="form-label">Contenuto</label>
                <input
                    type="text"
                    class="form-control"
                    name="contenuto"
                    id="contenuto"
                    placeholder="..."
                    value="{{ old('contenuto', $project->contenuto) }}"
                />
                {{-- for, name, id uguali --}}
            </div>

            {{-- aggiungere sempre 'type submit' --}}
            <button type="submit" class="btn btn-success">Conferma modifica</button>

        </form>
    </div>
@endsection
