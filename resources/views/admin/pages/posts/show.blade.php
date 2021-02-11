@extends('adminlte::page')

@section('title', "Detalhes do post {$post->name}")

@section('content_header')
    <h1>Detalhes do post <b>{{ $post->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Título: </strong> {{ $post->name }}
                </li>
                <li>
                    <strong>Conteúdo: </strong> {{ $post->content }}
                </li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Excluir</button>
            </form>
        </div>
    </div>
@endsection
