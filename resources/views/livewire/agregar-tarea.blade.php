<div>
  <form wire:submit.prevent="submit" class="mt-5">
      <div class="mb-3">
          <label class="form-label">Nombre de la tarea</label>
          <input wire:model="nameTarea" type="text" class="form-control">
          @error('nameTarea') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Descripción</label>
          <input wire:model="description" type="text" class="form-control">
          @error('description') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Horas requeridas</label>
          <input wire:model="horasRequeridas" type="text" class="form-control">
          @error('horasRequeridas') <span class="error">{{ $message }}</span> @enderror
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
