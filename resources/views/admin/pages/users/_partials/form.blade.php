@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>E-mail:</label>
    <input type="email" name="email" class="form-control" placeholder="Nome:" value="{{ $user->email ?? old('email') }}">
</div>
<div class="form-group">
    <label>Contato:</label>
    <input type="text" name="phone" class="form-control" placeholder="Contato:" value="{{ $user->phone ?? old('phone') }}">
</div>
<div class="form-group">
    <label>Link do processo:</label>
    <input type="text" name="link_process" class="form-control" placeholder="Link do processo:" value="{{ $user->link_process ?? old('link_process') }}">
</div>
<div class="form-group">
    <label>Senha:</label>
    <input type="password" name="password" class="form-control" placeholder="Senha:">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
</div>
