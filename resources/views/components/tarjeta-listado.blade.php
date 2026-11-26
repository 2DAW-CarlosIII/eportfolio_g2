
  <div class="space-y-3 sm:col-span-2 border-2 border-black-200 rounded-lg p-4">
            <h2 class="text-2xl font-semibold">
                EVIDENCIA ESTUDIANTE ID: {{ $evidencia['estudiante_id'] }} - TAREA ID: {{ $evidencia['tarea_id'] }}
            </h2>
            <p><strong>Descripción:</strong> {{ $evidencia['descripcion'] }}</p>
            <p><strong>URL:</strong> <a href="{{ $evidencia['url'] }}" target="_blank">{{ $evidencia['url'] }}</a></p>
            @if (\App\Enums\EstadoValidacion::tryFrom($evidencia['estado_validacion'] ?? '') === null)
                <p style="color:red; font-weight:bold">ESTADO DE VALIDACION INCORRECTO</p>
            @else
                <p @class([
                'mt-2 font-bold',
                'text-green-700' => $evidencia['estado_validacion'] === 'validada',
                'text-red-700' => $evidencia['estado_validacion'] === 'rechazada',
                'text-yellow-700' => $evidencia['estado_validacion'] === 'pendiente',
                'text-blue-700' => $evidencia['estado_validacion'] === 'asignada',
                ])>{{ $evidencia['estado_validacion'] }}
                </p>
            @endif
        
            <div class="flex gap-3 pt-2">
                <x-bookme.boton :href="route('evidencias.edit', ['id' => $id])" primario>
                    Editar Proyecto
                </x-bookme.boton>
                 <x-bookme.boton :href="route('evidencias.index')" primario>
                    Volver al listado
                </x-bookme.boton>
            </div>
        </div>