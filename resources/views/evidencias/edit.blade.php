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
                        method="POST" enctype="multipart/form-data">

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
                            <label for="miArchivo">Documento</label>
                            <input type="file" class="form-control" id="miArchivo" name="miArchivo" placeholder="documento">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control"
                                value="{{ $evidencias->descripcion }}">
                        </div>
                        <div class="form-group">
                            <label for="estado_validacion">estado_validacion</label>
                            <select name="estado_validacion" id="estado_validacion" class="form-control" required>
                                <option value="pendiente">Pendiente</option>
                                <option value="validada">Validada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
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
