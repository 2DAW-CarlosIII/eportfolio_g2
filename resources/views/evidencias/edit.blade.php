@extends('landed.master')



@section('content')
    <h2>Editar evidencia de aprendizaje: {{ $evidencias->id }}</h2>
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar evidencia de aprendizaje {{ $evidencias->tarea_id }}
                </div>
                <div class="card-body" style="padding:30px">

                    <form
                        action="{{ action([App\Http\Controllers\EvidenciasController::class, 'putCreate'], $evidencias->id) }}"
                        method="POST">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="estudiante_id">estudiante_id</label>
                            <input type="text" name="estudiante_id" id="estudiante_id" class="form-control"
                                value="{{ $evidencias->estudiante_id }}">
                        </div>
                        <div class="form-group">
                            <label for="tarea_id">tarea_id</label>
                            <input type="text" name="tarea_id" id="tarea_id"
                                class="form-control"value="{{ $evidencias->tarea_id }}">
                        </div>
                         <div class="form-group">
                            <label for="documento">url</label>
                            <input type="file" class="form-control" id="url" name="url" placeholder="url" value="{{ $evidencias->url }}">
                        </div>
                         <div class="form-group">
                            <label for="documento">Documento</label>
                            <input type="file" class="form-control" id="documento" name="documento" placeholder="documento">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control"
                                value="{{ $evidencias->descripcion }}">
                        </div>
                        <div class="form-group">
                            <label for="estado_validacion">estado_validacion</label>
                            <input type="text" name="estado_validacion" id="codigo"
                                value="{{ $evidencias->estado_validacion }}">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar evidencia de aprendizaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
