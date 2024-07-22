<div>
    <form wire:submit.prevent="submit" class="mt-5">
        <div class="mb-3">
            <label class="form-label">Nombre del Trabajador</label>
            <input wire:model="nombre" type="text" class="form-control">
            @error('nombre') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Horas Asignadas</label>
            <input wire:model="horasTrabajo" type="text" class="form-control">
            @error('horasTrabajo') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Cédula</label>
            <input wire:model="numCedula" type="text" class="form-control">
            @error('numCedula') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="tareaAsignada" class="form-label">Seleccionar Tarea</label>
            <select wire:model="tareaAsignada" id="tareaAsignada" class="form-select">
                <option value="">Seleccionar Tarea</option>
                @if($tareas)
                    @foreach($tareas as $tarea)
                        <option value="{{ $tarea->id }}">{{ $tarea->nombreTarea }}</option>
                    @endforeach
                @else
                    <option value="">No hay tareas disponibles</option>
                @endif
            </select>
            @error('tareaAsignada') <span class="error">{{ $message }}</span> @enderror
        </div>
        @if($errorMessage)
            <div class="alert alert-danger">
                {{ $errorMessage }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
