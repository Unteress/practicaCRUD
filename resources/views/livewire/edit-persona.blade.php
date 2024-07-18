<div>
    @if ($mostrarFormulario)
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input wire:model="name" type="text" class="form-control">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input wire:model="email" type="email" class="form-control">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button wire:click="actualizar" class="btn btn-primary">Actualizar</button>
        </div>
    @else
        <button wire:click="mostrarFormulario" class="btn btn-warning">Editar</button>
    @endif
</div>
