@extends('landed.master')
@section('content')
    <div class="row m-4">

        <div class="col-sm-4">

            <img src='/landed/images/logo.png' style="height:200px" />

        </div>
        <div class="col-sm-8">

            <h3><strong>Descripcion: </strong></h3>
            <p>{{ $evidencias->descripción }}</p>
            <h4><strong>tarea_id: </strong>{{ $evidencias->tarea_id }}</h4>
            <h4><strong>Estudiante_id: </strong>{{ $evidencias->estudiante_id }}</h4>
            <h4><strong>Estado validacion: </strong>{{ $evidencias->estado_validacion }}</h4>
            <h4><strong>Descripcion: </strong>{{ $evidencias->descripcion }}</h4>
            <h4>
                @if ($evidencias->url)
                    <strong>Documento: </strong><a href="{{ Storage::url($evidencias->url) }}">Ver documento</a>
                @endif
            </h4>
            @auth
                <a class="btn btn-warning"
                    href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getEdit'], $evidencias->id) }}">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Editar evidencia de aprendizaje.
                </a>
            @endauth

            <a class="btn btn-outline-info"
                href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getIndex']) }}">
                Volver al listado
            </a>


        </div>
    </div>
@endsection
