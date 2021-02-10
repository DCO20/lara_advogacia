@extends('adminlte::page')

@section('title', "Detalhes do usuário {$team->name}")

@section('content_header')
    <h1>Detalhes do usuário <b>{{ $team->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $team->name }}
                </li>
                <li>
                    <strong>Email: </strong> {{ $team->email }}
                </li>
                <li>
                    <strong>Contato: </strong> {{ $team->phone }}
                </li>
                <li>
                    <strong>Ocupação: </strong> {{ $team->occupation }}
                </li>
                <li>
                    <strong>Link do Facebook: </strong> {{ $team->link_facebook }}
                </li>
                <li>
                    <strong>Link do LinkdIn: </strong> {{ $team->link_linkdin }}
                </li>
                <li>
                    <strong>Link do Instagram: </strong> {{ $team->link_instagram }}
                </li>
                <li>
                    <strong>Link do Twitter: </strong> {{ $team->link_twitter }}
                </li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Excluir</button>
            </form>
        </div>
    </div>
@endsection
