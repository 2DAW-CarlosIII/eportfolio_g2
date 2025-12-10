@extends('landed.master')



    @section('content')
        <h2>Create resultado de aprendizaje</h2>

          <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir resultado de aprendizaje
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\ResultadosAprendizajeController::class, 'postCreate']) }}" method="POST">

                        @csrf


                        <div class="form-group">
                            <label for="descripción">Descripcion</label>
                            <input type="text" name="descripción" id="descripción" class="form-control">
                        </div>


                        <div class="form-group">

                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo">
                        </div>

                        <div class="form-group">

                            <label for="orden">Orden</label>
                            <input type="number" name="orden" id="orden">
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir resultado de aprendizaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    @endsection
