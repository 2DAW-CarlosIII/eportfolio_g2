@extends('landed.master')



@section('content')
    <h2>crear una evidencia</h2>

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir evidencia de aprendizaje
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'postCreate']) }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="estudiante_id">estudiante_id</label>
                            <input type="text" name="estudiante_id" id="estudiante_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tarea_id">tarea_id</label>
                            <input type="text" name="tarea_id" id="tarea_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="estado_validacion">estado_validacion</label>
                            <select name="estado_validacion" id="estado_validacion" class="form-control" required>
                                <option value="pendiente">Pendiente</option>
                                <option value="validada">Validada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="miArchivo">Selecciona un documento:</label>
                            <input type="file" id="miArchivo" name="miArchivo" required>
                            <br><br>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir evidencia de aprendizaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
