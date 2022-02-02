<div class="content">
    <div class="container-fluid ">
        <div class="bg-white shadow-sm rounded border">
            <div class="card-header">
                <h5 class="card-title">Dados do usuários</h5>
            </div>
            <form wire:submit.prevent="storeUser" class="form-validate" novalidate>
                <div class=" card-body">
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col pl-0 ">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input id="name" type="text" wire:model.lazy="name" autofocus
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Nome do usuário">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col pr-0">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input id="email" type="email" wire:model.lazy="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="E-mail do usuário">
                                    @error('email')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col pl-0 ">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" value="{{ old('password', '') }}"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword1" placeholder="Password">
                                    @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col pr-0 d-flex align-items-center pt-3" />
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
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
