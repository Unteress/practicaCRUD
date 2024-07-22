<div>
    <!-- Botón para confirmar eliminación -->
    @if($confirming)
        <div class="alert alert-warning">
            <p>¿Estás seguro de que deseas eliminar este trabajador?</p>
            <button wire:click="delete" class="btn btn-danger">Eliminar</button>
            <button wire:click="$set('confirming', false)" class="btn btn-secondary">Cancelar</button>
        </div>
    @else
        <button wire:click="confirmDelete" class="btn btn-danger">Eliminar</button>
    @endif
</div>
