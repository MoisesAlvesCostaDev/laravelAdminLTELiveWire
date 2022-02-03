<div class="content">
    <div class="container-fluid bg-white shadow-sm rounded border p-0">
        <div class="card-header">
            <h5 class="card-title wrapper">Listagem de usuários</h5>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input wire:model="search" type="search" name="name" class="form-control float-right"
                        placeholder="Nome do usuário">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped m-0 p-0 ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Situação</th>
                    <th scope="col" width="100">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span
                                class="badge  {{ $user->status ? 'badge-success' : 'badge-danger' }}">{{ $user->status ? 'Ativo' : 'Inativo' }}</span>
                        </td>
                        <td class="text-nowrap">
                            <a href="{{ route('admin.user.show', $user->id) }}" data-tt="tooltip" data-placement="top"
                                title="Ver detalhes"><i class="fa fa-search m-0 p-0 ml-1 mr-1"></i></a>
                            <a href="{{ route('admin.user.edit', $user->id) }}" data-tt="tooltip" data-placement="top"
                                title="Editar usuário"><i class="fas fa-edit m-0 p-0 ml-1 mr-1"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer clearfix bg-white">
            {{ $users->links('components.pagination.index') }}
        </div>
        <br>
    </div>
</div>
