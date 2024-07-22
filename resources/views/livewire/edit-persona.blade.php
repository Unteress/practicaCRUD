<div>
    @if ($mostrarFormulario)
        <div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input wire:model="nombre" type="text" class="form-control">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="horasTrabajo" class="form-label">Horas Asignadas</label>
                <input wire:model="horasTrabajo" type="text" class="form-control">
                @error('horasTrabajo') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="numCedula" class="form-label">Cédula</label>
                <input wire:model="numCedula" type="text" class="form-control">
                @error('numCedula') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="tareaAsignada" class="form-label">Seleccionar Tarea</label>
                <select wire:model="tareaAsignada" id="tareaAsignada" class="form-select">
                    <option value="">Seleccionar Tarea</option>
                    @foreach($tareas as $tarea)
                        <option value="{{ $tarea->id }}">{{ $tarea->nombreTarea }}</option>
                    @endforeach
                </select>
                @error('tareaAsignada') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button wire:click="actualizar" class="btn btn-primary">Actualizar</button>
        </div>
    @else
        <button wire:click="mostrarFormulario" class="btn btn-warning">Editar</button>
    @endif
</div>
