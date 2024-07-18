<div>
  <form wire:submit.prevent="submit" class="mt-5">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input wire:model="name" type="text" class="form-control">
          @error('name') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input wire:model="email" type="email" class="form-control">
          @error('email') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input wire:model="password" type="password" class="form-control">
          @error('password') <span class="error">{{ $message }}</span> @enderror
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
