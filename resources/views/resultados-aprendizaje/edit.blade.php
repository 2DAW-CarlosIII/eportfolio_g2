@extends('landed.master')



    @section('content')
  <h2>Editar Resultado de aprendizaje: {{$id}}</h2>
          <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar resultado de aprendizaje {{$resultados_aprendizaje->codigo}}
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\ResultadosAprendizajeController::class, 'putCreate'],  ($resultados_aprendizaje->id) ) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="descripción">Descripcion</label>
                            <input type="text" name="descripción" id="descripción" class="form-control"  value="{{$resultados_aprendizaje->descripción}}">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" value="{{$resultados_aprendizaje->codigo}}">
                        </div>

                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="text" name="orden" id="orden" value="{{$resultados_aprendizaje->orden}}">
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar resultado de aprendizaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     @endsection
