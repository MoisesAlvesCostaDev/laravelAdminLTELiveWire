<div class="content">
    <div class="container-fluid ">
        <div class="bg-white shadow-sm rounded border">
            <div class="card-header">
                <h5 class="card-title">Listagem de Usuários</h5>
            </div>
            <form>
                <div class="card-body">
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col pl-0 ">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome do usuário"
                                        value="{{ $user->name }}" disabled>
                                </div>
                            </div>
                            <div class="col pr-0">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" placeholder="E-mail do usuário"
                                        value="{{ $user->email }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col pl-0 ">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                        value="{{ $user->password }}" disabled>
                                </div>
                            </div>
                            <div class="col pr-0 d-flex align-items-center pt-3">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                        @if ($user->status) checked  @endif>
                                    <label for="customCheckbox2" class="custom-control-label"> Ativo </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('admin.user.index') }}" type="button"
                                        class="btn btn-outline-primary">Cancelar</a>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a href="{{ route('admin.user.edit', ['userId' => $user->id]) }}" type="submit"
                                        class="btn btn-primary">Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
