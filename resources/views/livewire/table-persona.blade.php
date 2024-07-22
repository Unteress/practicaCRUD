<div>
    <div class="mb-3">
        <label for="cedulaFilter" class="form-label">Filtrar por Cédula</label>
        <input wire:model="cedulaFilter" type="text" id="cedulaFilter" class="form-control" placeholder="Ingrese el número de cédula">
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Horas</th>
                <th scope="col">Cédula</th>
                <th scope="col">Tarea Asignada</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datosTrabajador as $index => $trabajador)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $trabajador->nombre }}</td>
                    <td>{{ $trabajador->horasTrabajo }}</td>
                    <td>{{ $trabajador->numCedula }}</td>
                    <td>{{ $trabajador->tarea->nombreTarea ?? 'N/A' }}</td> <!-- Mostrar el nombre de la tarea -->
                    <td>
                        <livewire:delete-persona :userId="$trabajador->id" :key="'eliminar-'.$trabajador->id"/>
                    </td>
                    <td>
                        <livewire:edit-persona :userId="$trabajador->id" :key="'editar-'.$trabajador->id" />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No se encontraron trabajadores.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
