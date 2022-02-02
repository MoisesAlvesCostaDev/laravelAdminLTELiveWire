@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <div class="content-header">
        <h1>Editar usuário</h1>
    </div>
@stop

@section('content')
    <livewire:admin.user.edit />
@stop


@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
