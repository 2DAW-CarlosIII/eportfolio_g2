@props(['moduloFormativo', 'id'])

    <div class="rounded-lg bg-white p-4 shadow ">
        <div class="space-y-3 sm:col-span-2 border-2 border-black-200 rounded-lg p-4  ">
            <h2 class="text-2xl font-semibold">
                <a href="{{ route('modulos-formativos.show', $id) }}"> {{ $moduloFormativo['nombre'] }}</a>
            </h2>
            <p><strong>Código</strong> {{ $moduloFormativo['codigo'] }}</p>
            <p><strong>Código Ciclo Formativo</strong> {{ $moduloFormativo['codigo_ciclo'] }}</p>
            <p><strong>Horas Totales</strong> {{ $moduloFormativo['horas_totales'] }}</p>
            <p><strong>Curso Escolar</strong> {{ $moduloFormativo['curso_escolar'] }}</p>
            <p><strong>Centro</strong> {{ $moduloFormativo['centro'] }}</p>
            <p><strong>Descripción</strong> {{ $moduloFormativo['descripcion'] }}</p>

            <div class="flex gap-3 pt-2">
                <x-bookme.boton primario :href="route('modulos-formativos.edit', $id)">
                    Editar Módulo Formativo
                </x-bookme.boton>
                <x-bookme.boton :href="route('modulos-formativos.index')" alt>
                    Volver al listado
                </x-bookme.boton>
            </div>
        </div>
    </div>

