@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('posts.index') }}" class="active">Posts</a></li>
    </ol>

    <h1>Posts <a href="{{ route('posts.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a></h1>
@stop

@section('content')
@include('admin.includes.alerts')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('posts.search') }}" method="POST" class="form form-inline">
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
                        <th>Título</th>
                        <th width="210">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->name }}" style="max-width: 90px;">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td style="width=10px;">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info"><i class="fas fa-post-edit"></i> Editar</a>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning"><i class="fas fa-post"></i> Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $posts->appends($filters)->links() !!}
            @else
                {!! $posts->links() !!}
            @endif
        </div>
    </div>
@stop