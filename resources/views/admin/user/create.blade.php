@extends('adminlte::page')

@section('title', 'Usuário')

@section('content_header')
    <div class="content-header">
        <h1>Adicionar usuário</h1>
    </div>
@stop

@section('content')
    <livewire:admin.user.create />
@stop


@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
