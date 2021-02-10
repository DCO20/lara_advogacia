@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('teams.index') }}" class="active">Usuários</a></li>
    </ol>

    <h1>Usuários <a href="{{ route('teams.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a></h1>
@stop

@section('content')
@include('admin.includes.alerts')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('teams.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtrar:" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="100">Imagem</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Contato</th>
                        <th width="210">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>
                                <img src="{{ url("storage/{$team->image}") }}" alt="{{ $team->name }}" style="max-width: 90px;">
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->email }}</td>
                            <td>{{ $team->phone }}</td>
                            <td style="width=10px;">
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-info"><i class="fas fa-team-edit"></i> Editar</a>
                                <a href="{{ route('teams.show', $team->id) }}" class="btn btn-warning"><i class="fas fa-team"></i> Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $teams->appends($filters)->links() !!}
            @else
                {!! $teams->links() !!}
            @endif
        </div>
    </div>
@stop