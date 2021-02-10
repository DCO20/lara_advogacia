@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $team->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>E-mail:</label>
    <input type="email" name="email" class="form-control" placeholder="Nome:" value="{{ $team->email ?? old('email') }}">
</div>
<div class="form-group">
    <label>Ocupacão:</label>
    <input type="text" name="occupation" class="form-control" placeholder="Ocupação:" value="{{ $team->occupation ?? old('occupation') }}">
</div>
<div class="form-group">
    <label>Contato:</label>
    <input type="text" name="phone" class="form-control" placeholder="Contato:" value="{{ $team->phone ?? old('phone') }}">
</div>
<div class="form-group">
    <label> Imagem:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group">
    <label>Link do Facebook:</label>
    <input type="text" name="link_facebook" class="form-control" placeholder="Link do facebook:" value="{{ $team->link_facebook ?? old('link_facebook') }}">
</div>
<div class="form-group">
    <label>Link do LinkdIn</label>
    <input type="text" name="link_linkdin" class="form-control" placeholder="Link do LinkdIn:" value="{{ $team->link_linkdin ?? old('link_linkdin') }}">
</div>
<div class="form-group">
    <label>Link do Instagram:</label>
    <input type="text" name="link_instagram" class="form-control" placeholder="Link do Instagram:" value="{{ $team->link_instagram ?? old('link_instagram') }}">
</div>
<div class="form-group">
    <label>Link do Twitter:</label>
    <input type="text" name="link_twitter" class="form-control" placeholder="Link do Twitter:" value="{{ $team->link_twitter ?? old('link_twitter') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
</div>
