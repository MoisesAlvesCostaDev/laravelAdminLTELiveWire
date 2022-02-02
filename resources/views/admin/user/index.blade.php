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
                    <a type="button" class="btn btn-secondary" href="{{ route('admin.user.create') }}">
                        <i class="fa fa-plus mr-2"></i>
                        Adicionar usuário
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <livewire:admin.user.index />
@stop


@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
