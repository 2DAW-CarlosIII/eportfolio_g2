@extends('prologue.master')//esta es la vista que se va a mostrar que hereda de la plantilla

    @section('menu')
        @parent
        <li>Opcion adicional</li>
    @endsection

    @section('content')
        <h2>Marca Personal F.P.</h2>
        <p>Página principal</p>
    @endsection
