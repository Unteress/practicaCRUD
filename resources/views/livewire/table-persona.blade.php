<div>
  <table class="table">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Contraseña</th>
              <th scope="col">Eliminar</th>
              <th scope="col">Editar</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($usuarios as $index => $user)
              <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>
                  <td>
                    <livewire:delete-persona :userId="$user->id" :key="'eliminar-'.$user->id"/>
                  </td>
                  <td>
                    <livewire:edit-persona :userId="$user->id" :key="'editar-'.$user->id" />
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
