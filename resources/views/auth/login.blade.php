<x-guest-layout>
        <div class="container mt-5 shadow">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3 class="mt-2 text-center">Login</h3><hr>
                    <form action="{{route('login')}}" method="POST">
                      @csrf
                      <x-jet-validation-errors class="mb-4" />
                        <div class="form-group mt-2">
                          <label for="exampleInputEmail1">Email:</label>
                          <input name="email" type="email" class="form-control"  placeholder="Digite seu email" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Senha:</label>
                          <input name="password" type="password" class="form-control"  placeholder="Digite sua senha">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label name="rememberme" id="rememberme" value="forever" type="checkbox">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Login</button>
                        <div class="mt-3"></div>
                      </form>
                </div>
            </div>
        </div>
</x-guest-layout>
