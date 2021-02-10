@extends('adminlte::page')

@section('title', "Editar o usuário {$team->name}")

@section('content_header')
    <h1>Editar o usuário {{ $team->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('teams.update', $team->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.teams._partials.form')
            </form>
        </div>
    </div>
@endsection
