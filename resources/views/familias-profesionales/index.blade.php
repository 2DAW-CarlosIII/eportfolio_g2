@extends('landed.master')
<<<<<<< HEAD
    @section('content')
<div class="row">

    @foreach ($familiasProfesionales as $key => $familiaProfesional)

    <div class="col-4 col-6-medium col-12-small">
        <section class="box">
            <a href="#" class="image featured"><img src="{{ asset('/images/logo.png') }}" alt="" /></a>
            <header>
                <h3>{{ $familiaProfesional['nombre'] }}</h3>
            </header>
            <p>
                <a href="http://github.com/2DAW-CarlosIII/{{ $familiaProfesional['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $familiaProfesional['dominio'] }}
                </a>
            </p>
            <footer>
                <ul class="actions">
                    <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getShow'], ['id' => $key] ) }}" class="button alt">Más info</a></li>
                </ul>
            </footer>
        </section>
    </div>

    @endforeach
</div>

=======



    @section('content')
        <h2>Familias Profesionales</h2>
>>>>>>> 5ca93a89861eddb2d71db1212c7d199885d3a94b
    @endsection
