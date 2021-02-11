@extends('adminlte::page')

@section('title', "Editar o Post {$post->name}")

@section('content_header')
    <h1>Editar o Post {{ $post->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.posts._partials.form')
            </form>
        </div>
    </div>
@endsection
