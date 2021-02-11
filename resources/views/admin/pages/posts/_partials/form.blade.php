@include('admin.includes.alerts')

<div class="form-group">
    <label>Título:</label>
    <input type="text" name="title" class="form-control" placeholder="Digite o título:" value="{{ $post->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>Sobre:</label>
    <input type="text" name="about" class="form-control" placeholder="Digite o sobre" value="{{ $post->about ?? old('about') }}">
</div>
<div class="form-group">
    <label>Conteúdo:</label>
    <input type="text" name="content" class="form-control" placeholder="Digite o conteúdo" value="{{ $post->content ?? old('content') }}">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <input type="file" name="image" id="image" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
</div>
