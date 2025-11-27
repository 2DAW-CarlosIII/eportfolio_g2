@extends('landed.master')



    @section('content')
<<<<<<< HEAD
        <h2>Editar Familias Profesionales con id: {{$id}}</h2>

=======
  <h2>Editar Familias Profesionales con id: {{$id}}</h2>
>>>>>>> 39fc365be0664deebe708235540996afd3615840
          <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar familia profesional
                </div>
                <div class="card-body" style="padding:30px">

<<<<<<< HEAD
                    <form action="{{ action([App\Http\Controllers\ProyectosController::class, 'update'],  ['id' => $id]) }}" method="POST">
=======
                    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'update'],  ['id' => $id]) }}" method="POST">
>>>>>>> 39fc365be0664deebe708235540996afd3615840

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
<<<<<<< HEAD
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="docente_id">Docente</label>
                            <input type="number" name="docente_id" id="docente_id">
                        </div>

                        <div class="form-group">
                            <label for="dominio">Dominio</label><br />
                            https://github.com/2DAW-CarlosIII/
                            <input type="text" name="dominio" id="dominio" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="metadatos">Metadatos</label>
                            <textarea name="metadatos" id="metadatos" class="form-control" rows="3"></textarea>
                            <br /><small>Cada metadato irá separado del siguiente por una línea <br />
                                y la clave irá separada por : del valor</small>
                        </div>
=======
                            <input type="text" name="nombre" id="nombre" class="form-control"  value="{{$familias_profesionales['nombre']}}">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" value="{{$familias_profesionales['codigo']}}">
                        </div>

>>>>>>> 39fc365be0664deebe708235540996afd3615840

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar familia profesional
                            </button>
                        </div>
<<<<<<< HEAD

                    </form>

=======
                    </form>
>>>>>>> 39fc365be0664deebe708235540996afd3615840
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    @endsection
=======
     @endsection
>>>>>>> 39fc365be0664deebe708235540996afd3615840
