@extends('adminlte::page')

@section('title', 'Cadastrar Novo Post')

@section('content_header')
    <h1>Cadastrar Novo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.posts._partials.form')
            </form>
        </div>
    </div>
@endsection
