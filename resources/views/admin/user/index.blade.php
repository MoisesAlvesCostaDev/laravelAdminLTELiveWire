@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <h1>Usuários</h1>
                </div>
                <div class="col d-flex justify-content-end ">
                    <button type="button" class="btn btn-secondary">
                        <i class="fa fa-plus mr-2"></i>
                        Adicionar usuário
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid bg-white shadow-sm rounded border p-0">
            <div class="card-header">
                <h5 class="card-title wrapper">Listagem de usuários</h5>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right"
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <span class="badge badge-success">Ativo</span>
                        </td>
                        <td class="text-nowrap">
                            <a data-tt="tooltip" data-placement="top" title="Ver detalhes"><i
                                    class="fa fa-search m-0 p-0 ml-1 mr-1"></i></a>
                            <a data-tt="tooltip" data-placement="top" title="Editar usuário"><i
                                    class="fas fa-edit m-0 p-0 ml-1 mr-1"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td> <span class="badge badge-success">Ativo</span></td>
                        <td class="text-nowrap">
                            <a data-tt="tooltip" data-placement="top" title="Ver detalhes"><i
                                    class="fa fa-search m-0 p-0 ml-1 mr-1"></i></a>
                            <a data-tt="tooltip" data-placement="top" title="Editar usuário"><i
                                    class="fas fa-edit m-0 p-0 ml-1 mr-1"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td> <span class="badge badge-danger">inativo</span></td>
                        <td class="text-nowrap">
                            <a data-tt="tooltip" data-placement="top" title="Ver detalhes"><i
                                    class="fa fa-search m-0 p-0 ml-1 mr-1"></i></a>
                            <a data-tt="tooltip" data-placement="top" title="Editar usuário"><i
                                    class="fas fa-edit m-0 p-0 ml-1 mr-1"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix mt-3 mr-3">
                <ul class="pagination pagination m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
            <br>
        </div>
    </div>
@stop


@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
